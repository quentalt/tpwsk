# TPwsk


**create actions**

wsk action create randomDouble1 randomDouble.js

wsk action create randomDouble2 randomDouble.py
wsk action create randomDouble3 randomDouble.php

wsk action create expose exposeUrl.js


**create sequence and launch sequence 1**

wsk action create mysequence --sequence randomDouble1,randomDouble2,randomDouble3

wsk action invoke mysequence

**create sequence 2 and get sequence 2**

wsk action create mysequence2 --sequence randomDouble1,randomDouble2,randomDouble3,expose --web true  

wsk action get mysequence2 --url

curl https://ow.services.eemi.tech/api/v1/web/quentin.altieri%40eemi.com/default/mysequence2
