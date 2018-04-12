UPDATETIMESTAMP="$(date +%s)"
touch assets/version.json
echo '{ "update_ver":' $UPDATETIMESTAMP '}' > assets/version.json
echo 'Auto generate new update version was complete ...'
