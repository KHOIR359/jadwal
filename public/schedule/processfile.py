import json
import math 
import re

listKelas = ['X', 'XI', 'XII']
listJurusan =['MIPA 1', 'MIPA 2', 'IPS 1', 'IPS 2', 'IPS 3']

for kelas in listKelas:
  for jurusan in listJurusan:
    with open('all.json', 'r') as alljsonfile:
      alljsondata = json.loads(alljsonfile.read())

      with open('structure.json', 'r') as structurefile:
        structuredata = structurefile.read()
        structuredata = json.loads(structuredata)
        for [i, data] in enumerate(alljsondata):
          if i < 15:
            index =  math.floor(i/3)
            subject = re.findall(string=data[kelas + ' ' + jurusan], pattern='(.*) \((.*)\)')[0]
            structuredata[index]['subjects'][i%3]['name'] = subject[0]
            structuredata[index]['subjects'][i%3]['teacher'] = subject[1]
        with open(kelas + ' '+ jurusan +'.json', 'w') as f:
          f.write(json.dumps(structuredata))
          f.close()
          print('berhasil update ' + kelas + ' ' + jurusan)
        structurefile.close()
      alljsonfile.close()
        
      