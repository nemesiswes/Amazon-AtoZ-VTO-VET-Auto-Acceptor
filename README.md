# Amazon-AtoZ-VTO-VET-Auto-Acceptor
02-14-2025 update: This probably doesn't work anymore based on reports I have heard about. Feel free to try and fix it as I stopped work on it back in like 2022.

Tired of not getting VTO or VET? Well now you can get all the VTO or VET. 

I made this using the TamperMonkey Extension for Chrome. You should be able to get this working in Firefox using Grease monkey with little modification. 
Also it is possible to remotly activate or deactivate the script. You will just need a Home server, in my case I just used XAMPP for Windows.

The AtoZ VTO-VET 2.0.txt is the code to use with TamperMonkey, just copy and paste the code into a new TamperMonkey Script.

1. Put your Employee ID in the employee_id field.
2. Optional, add Home server URl in the home_server_url field. Then uncomment out the Home server code
3. Optional, add sound_clip to the audio_clip_url field. Then uncomment out the sound clip code in the alarm_sound function.
4. Your going to also need a Mouse Auto Clicker, you need to make sure it clicks the page say every 250ms to make sure the page registers a click,  just have it click a non-clickable area of the page.
5. You might also want to get a Page refresher extension for chrome that refreshes every 90 seconds or so in case of page errros that prevent the script from auto refreshing page. Its a wierd bug I never fixed. Just stays on a white page doing nothing.

You can also mess around with timings for page refresh to make it faster, slower etc..

Also, very important, you need make sure chrome auto fills your login details for AtoZ, this way all my script does it click login. This is other reason you need a Mouse AutoClicker, if the mouse doesn't click the page, login will fail even if details are correct. You will also want to make sure remember this device is checked when logging in or getting sms code, I don't quite remember where it happens.


Also If you want to Test it, you can spoof the VTO CALL with your own VTO. 
1. Add to Chrome Target "--autoplay-policy=no-user-gesture-required --disable-web-security --disable-gpu --user-data-dir=~/chromeTemp"
2. Get Chrome Extension Requestly and create a rule redirect, If Request "URL" Contains "https://atoz.amazon.work/api/v1/opportunities/get_opportunities?employee_id=YOUR EMPLOYEE ID"
3. Set Destination to your Server address, in my case "http://localhost/AtoZ_debug/index.php";

I have the php file included to spoof calls, you will need to change dates and stuff for it to work though. You can try submitting fake vto, it won't do anything except say not valid or inelgible etc...

Enjoy your VTO!

