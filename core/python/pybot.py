import sys
import random
import json
import pickle
import numpy as np


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
    iteration = '0'
    path = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\'
    model_name =  'pybot_model'
    threshhold = .25




lemmatizer = WordNetLemmatizer()

intents = json.loads(open('C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\intents\\intents_v'+iteration+'.json').read())


word_folder = 'words\\'
classes_folder = 'classes\\'

words = pickle.load( open(path+word_folder+'words_v'+iteration+'.pk1','rb'))
classes  = pickle.load(open(path+classes_folder+'classes_v'+iteration+'.pk1','rb'))

model_folder = 'model\\'
model = load_model(path+model_folder+model_name+'_v'+iteration+'.h5')

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

print('NICE pybot is running')



while True:
    message = input(" ")
    ints = predict_class(message)
    res = get_response(ints, intents)
    print(res)

