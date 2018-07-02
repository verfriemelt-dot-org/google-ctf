import sys

def my_print(s):
  sys.stdout.write(s + '\n')
  sys.stdout.flush()

my_print("artist name?")
artist = raw_input().replace('"', "")
my_print("song name?")
song = raw_input().replace('"', "")
print ("""INSERT INTO media VALUES ("{}", "{}")""".format(artist, song)) 