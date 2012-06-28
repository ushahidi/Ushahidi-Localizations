#!/bin/bash
# Run full sync

cd `dirname $0`/..

# Pull from tx
source tools/tx-po2php-sync.sh

# Push english source to tx
source tools/source-php2po-sync.sh

echo "All done!"

