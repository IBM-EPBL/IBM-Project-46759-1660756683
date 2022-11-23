# Python code

import brain

myLocation = "Chennai,IN"
APIKEY = "c76d51c15c0e7c6c5f2002ad65efcec1"

localityInfo = {
    "schools" : {
        "schoolZone" : True,
        "activeTime" : ["7:00","17:30"] # schools active from 7 AM till 5:30 PM
        },
    "hospitalsNearby" : False,
    "usualSpeedLimit" : 40 # in km/hr
}


print(brain.processConditions(myLocation,APIKEY,localityInfo))
