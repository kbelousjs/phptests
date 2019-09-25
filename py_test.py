import random
import os

lucky_num = random.randint(1,10001)
print "Choose a number"

while True:
        res = input("Guess a number: ")
        if res == lucky_num:
                print "Congrats!"
                break
        else:
                continue

# os.execlp('sh', 'sh')
