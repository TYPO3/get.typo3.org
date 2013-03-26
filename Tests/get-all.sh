#!/bin/sh
##################################################
# Test all possible download of get.typo3.org
##################################################

# default values
dryRun=false
delete=false

case "$1" in
	"--dry-run")
	    dryRun=true
	    ;;
	"--delete")
		delete=true
		;;
	"--help")
		echo "
Possible options:

--dry-run  only display the command.
--delete   remove the file at the end of the tests but only the successful ones.
"
		exit
        ;;
esac

# Declare packages.
packages=(
    "introduction"
    "government"
    "blank"
    "stable"
    "dev"
    "6.0"
    "6.0.4"
    "typo3_src-4.5"
    "typo3_src-dev"
)

# Loop around packages.
for i in "${packages[@]}"
do

	command1="wget http://get.typo3.org/$i -O typo3_$i.tgz"
	command2="wget http://get.typo3.org/$i/zip -O typo3_$i.zip"

	if [ $dryRun == true ]; then
		echo $command1
		echo $command2
    else
        echo "Downloading from http://get.typo3.org/$i"
		$command1
		$command2
    fi
done

# Test size of the package which should be bigger than 10 Mo
if [ $dryRun == false ]; then
	for file in *.{tgz,zip}
	do

		# Make sure file exists
		if [ -f $file ]; then

			size=`du $file | awk '{print $1}'`
			# In case casting is necessary
	        #let size--

	        if [ $size -gt 10000 ]; then
	            echo "[OK] $file"

	            if [ $delete == true ] ; then
	                rm $file
	            fi

	        else
	            echo "[ERROR] $file <-- Something is wrong with the file!!"
	        fi
		fi
	done
fi