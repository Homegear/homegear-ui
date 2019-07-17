#!/bin/bash

SCRIPTDIR="$( cd "$(dirname $0)" && pwd )"

cd $SCRIPTDIR
echo $(cat version.txt)-$(cat revision.txt)
