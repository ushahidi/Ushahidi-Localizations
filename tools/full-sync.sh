#!/bin/bash
# Run full sync

# Pull from tx
source tx-po2php-sync.sh

# Push english source to tx
source tools/source-php2po-sync.sh

echo "All done!"

