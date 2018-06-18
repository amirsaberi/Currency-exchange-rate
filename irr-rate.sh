#!/bin/bash

curl -L -s http://sanarate.ir | grep trAgg | cut -d'>' -f6  | tail -n2 | head -n1 | cut -d'<' -f1 | sed 's/,//'
