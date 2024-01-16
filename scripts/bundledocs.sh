#!/bin/bash

source ./docs/bin/activate

sphinx-build -M html ./docs/source/ ./docs/build/

rm -rf ./public/build

cd ./public

mkdir build

cd ../

cp -f -R ./docs/build/* ./public/build