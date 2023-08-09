Hello,

Requirements/Installations: 

1). XAMPP Server(Apache),
2). MySQL 
to be preinstalled.

In order to execute the extension, follow the steps as mentioned:

Step 1: Download the ZIP file

Step 2: Extract the contents of the file 

Step 3: Rename the Final Extracted folder as "Phishing Extension".

Step 4: Copy the Folder into the folder named "htdocs" present inside "xampp"(where it is saved in your respective system after installation) 

Step 5: Go to chrome browser

Step 6: Type chrome://extensions/ and press enter

Step 7: On the top right hand side there will be a option as Developer Mode. Turn that option on

Step 8: After turning it on, you will find an option as "Load Unpacked". Click on it.

Step 9: Select the "Phishing Extension" named folder from the "htdocs".

Step 10: After selecting the folder name, click on Select Folder.

Step 11: The Extension is successfully loaded.

Step 12: Now go to the xampp control panel from start menu and turn on the "Apache" and "MySQL".

Step 13: After Succesfully turning them on, go to the "Admin" section of the "MySQL".

Step 14: Run the script "vmm.sql" into the phpMyAdmin Panel for the creation of the table.

Step 15: Now visit a Legitimate website say,

        "https://www.copyright.gov.in/" 
        

        No alert Pops up here

Step 16: Now visit a Phishing website as mentioned by Government of India,


        "http://www.passportindiaportal.in/" 
        

        Alert pops up as,
                                            ⚠ WARNING ⚠
                     This site may be a phishing site. Proceed with EXTREME caution!"
                     
Step 17: Click on "OK". You will be redirected to a form where you can Fill out the three values and hit the submit button.

Step 18: Switch back to the phpMyAdmin panel and go the the "form" table. You can see the values entered by you.

In case of any error in the execution of the code, you can reach out to me on, vinayakjalan.stu@gmail.com
