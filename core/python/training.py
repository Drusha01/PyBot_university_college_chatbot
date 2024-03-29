
import os
from os.path import exists
import sys
import random
import json
import pickle
import numpy as np

import nltk
import tensorflow
nltk.download('punkt')
nltk.download('wordnet')
nltk.download('omw-1.4')
from nltk.tokenize import word_tokenize

from nltk.stem import WordNetLemmatizer


from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, Activation, Dropout
from tensorflow.keras.optimizers import SGD




# default
max_epoch =250
model_lr = 0.01
if len(sys.argv) > 1:
    path = sys.argv[1]
    model_name =  sys.argv[2]
    intent_file_and_path =  sys.argv[3]
    intent_file_name = sys.argv[4]
    max_epoch =  sys.argv[5]
    model_lr =  sys.argv[6]

else:
    intent_file_and_path = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\intents\\intent_v1.json'
    intent_file_name = 'intent_v1.json'
    model_name = 'model_v1'
    path = 'C:\\wamp64\\www\\PyBot_university_college_chatbot\\core\\'
# create directory
if(not(os.path.isdir(path+'model_list\\'))):
    os.mkdir(path+'model_list\\')
if(not(os.path.isdir(path+'model_list\\'+model_name))):
    os.mkdir(path+'model_list\\'+model_name)

lemmatizer = WordNetLemmatizer()
if(exists(intent_file_and_path)):
    intents = json.loads(open(intent_file_and_path).read())

    json_object = json.dumps(intents, indent=4)
    with open(path+'model_list\\'+model_name+'\\intent.json', "w") as outfile:
        outfile.write(json_object)
else:
    print('data is not found')
    print('-1')

words =[]
classes = []
documents = []
ignmore_letters = ['?','!','.',',']

for intent in intents['intents']:
    for pattern in intent['patterns']:
        word_list = nltk.word_tokenize(pattern)
        words.extend(word_list)
        documents.append(((word_list),intent['tag']))
        if( intent['tag'] not in classes):
            classes.append(intent['tag'])


words = [lemmatizer.lemmatize(word) for word in words if word not in ignmore_letters]
words = sorted(set(words))
classes = sorted(set(classes))


pickle.dump(words, open(path+'model_list\\'+model_name+'\\words.pk1','wb'))
pickle.dump(classes, open(path+'model_list\\'+model_name+'\\classes.pk1','wb'))

training = []
output_empty = [0] * len(classes)
for document in documents:
    bag = []
    word_patterns = document[0]
    word_patterns = [lemmatizer.lemmatize(word.lower()) for word in word_patterns]
    for word in words:
        bag.append(1) if word in word_patterns else bag.append(0)

    output_row = list(output_empty)
    output_row[classes.index(document[1])] = 1
    training.append([bag,output_row])

random.shuffle(training)
training = np.array(training)

train_x = list(training[:,0])
train_y = list(training[:,1])


model = Sequential()
model.add(Dense(128,input_shape=(len(train_x[0]),), activation = 'relu'))
model.add(Dropout(0.5))

model.add(Dense(64,activation='relu'))
model.add(Dropout(0.5))

model.add(Dense(len(train_y[0]),activation='softmax'))

sgd = SGD(lr=float(model_lr),decay=1e-6,momentum=0.9,nesterov=True)
model.compile(loss='categorical_crossentropy',optimizer=sgd,metrics=['accuracy'])
hist = model.fit(np.array(train_x),np.array(train_y), epochs=int(max_epoch),batch_size=5,verbose=1)
model.save(path+'model_list\\'+model_name+'\\'+model_name+'.h5',hist)

