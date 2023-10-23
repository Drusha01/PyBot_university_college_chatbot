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
    ERROR_THRESHOLD = config_threshold
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




if len(sys.argv) > 1:
    json_config_path = sys.argv[1]
else:
    exit(0)
#load model for deployment
while(exists(json_config_path)):
    
    config = json.loads(open(json_config_path).read())

    config_threshold = config['threshold']
    config_delay = config['delay']
    config_iteration = config['iteration']
    config_run = config['run']
    config_path_to_questions = config['path_to_questions']
    config_path_to_answers = config['path_to_answers']
    config_path = config['path']
    config_model_folder = config['model_folder']


    if(not(bool(config_run)) & exists(config_path+'model_list')):
        intents = json.loads(open(config_path+'model_list\\'+config_model_folder+'\\intent.json').read())
        words = pickle.load( open(config_path+'model_list\\'+config_model_folder+'\\words.pk1','rb'))
        classes  = pickle.load(open(config_path+'model_list\\'+config_model_folder+'\\classes.pk1','rb'))
        model = load_model(config_path+'model_list\\'+config_model_folder+'\\'+config_model_folder+'.h5')

        config['run'] = 1
        json_object = json.dumps(config, indent=4)
        with open(json_config_path, "w") as outfile:
            outfile.write(json_object)


    config_iteration = int(config_iteration)
    config_delay = int(config_delay)
    
    if(config_iteration<=0):
        config_iteration = 1
    if(config_delay<=0):
        config_delay = 50 # 50 milliseconds
    # milli seconds to seconds
    config_delay = config_delay/1000
    
    counter = 0
    while(counter<config_iteration):
    # read question file
        content_list = os.listdir(config_path_to_questions)
        for item in content_list:
            # read file
            file_content = json.loads(open(config_path_to_questions+str(item)).read())
            question = file_content['question']
            ints = predict_class(question)
            answer = get_response(ints, intents)

            json_content = {
                "question": question,
                "answer": answer
            }
            json_object = json.dumps(json_content, indent=4)
            with open(config_path_to_answers+item, "w") as outfile:
                outfile.write(json_object)
            # delete file
            os.remove(config_path_to_questions+str(item))

        time.sleep(config_delay)
        counter+=1
    
    

    

exit('error loading config file')





