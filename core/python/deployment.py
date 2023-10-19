import os
from os.path import exists



import sys
import random
import json
import pickle
import numpy as np
import time


import nltk
from nltk.stem import WordNetLemmatizer
from tensorflow import keras 
from keras import layers,models
from keras.models import load_model




if len(sys.argv) > 1:
    iteration = sys.argv[1]
    path = sys.argv[2]+'\\core\\'
    model_name =  sys.argv[3]
else:
    iteration = '1'
    path = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\'
    model_name =  'pybot_model'
    threshhold = .25




lemmatizer = WordNetLemmatizer()



def clean_up_sentence(sentence):
    sentence_words = nltk.word_tokenize(sentence)
    sentence_words = [lemmatizer.lemmatize(word) for word in sentence_words]
    return sentence_words

def bag_of_words(sentence):
    sentence_words = clean_up_sentence(sentence)
    bag = [0] * len(words)
    for w in sentence_words:
        for i,  word in enumerate(words):
            if(word == w):
                bag[i] = 1
    return np.array(bag)

def predict_class(sentence):
    bow = bag_of_words(sentence)
    res = model.predict(np.array([bow]))[0]
    ERROR_THRESHOLD = threshhold
    results = [[i,r]  for i, r in enumerate(res) if r > ERROR_THRESHOLD]

    results.sort(key = lambda x: x[1], reverse=True)

    return_list =[]
    for r in results:
        return_list.append({'intent':classes[r[0]],'probability': str(r[1])})

    return return_list

def get_response(intent_list, intents_json):
    tag = intent_list[0]['intent']
    list_of_intents = intents_json['intents']
    result = 'i dont understand you'
    for i in list_of_intents:   
        if i['tag'] == tag:
            result = random.choice(i['responses'])
            break
    return result



word_folder = 'words\\'
classes_folder = 'classes\\'
model_folder = 'models\\'



#load model for deployment
if(exists(path+'deployment\\config\\deployment_config.json')):
    config = json.loads(open(path+'deployment\\config\\deployment_config.json').read())

    config_delay = config['delay']
    config_iteration = config['iteration']
    config_run = config['run']
    config_path_to_questions = config['path_to_questions']
    config_path_to_answers = config['path_to_asnwers']
    config_path = config['path']
    config_model = config['model']
    config_intents = config['intents']
    config_words = config['words']
    config_classes = config['classes']
    
    intents = json.loads(open(config_path+'intents\\'+config_intents).read())
    words = pickle.load( open(config_path+'words\\'+config_words,'rb'))
    classes  = pickle.load(open(config_path+'classes\\'+config_classes,'rb'))
    model = load_model(config_path+'models\\'+config_model)

    # read config
    counter = 1
    while(exists(path+'deployment\\config\\deployment_config.json')):
        config = json.loads(open(path+'deployment\\config\\deployment_config.json').read())
        config_delay = config['delay']
        config_iteration = config['iteration']
        config_run = config['run']
        config_path_to_questions = config['path_to_questions']
        config_path_to_answers = config['path_to_asnwers']

        if(config_run):
            config_iteration = int(config_iteration)
            config_delay = int(config_delay)
            if(config_iteration<=0):
                config_iteration = 1
            if(config_delay<=0):
                config_delay = 50 # 50 milliseconds
            # milli seconds to seconds
            config_delay = config_delay/1000
            
            # read question file
            content_list = os.listdir(path+'deployment\\questions\\')
            for item in content_list:
                print(item)
                # read file
                file_content = json.loads(open(path+'deployment\\questions\\'+str(item)).read())
                question = file_content['question']
                ints = predict_class(question)
                answer = get_response(ints, intents)

                json_content = {
                    "question": question,
                    "answer": answer
                }
                json_object = json.dumps(json_content, indent=4)
                with open(path+'deployment\\answers\\'+item, "w") as outfile:
                    outfile.write(json_object)
                # delete file
                os.remove(path+'deployment\\questions\\'+str(item))

            time.sleep(config_delay)
            print('running '+str(counter))
        else:
            exit('program ends here bye')
        counter+=1
    
else:
    exit('error loading config file')

print('great job')



