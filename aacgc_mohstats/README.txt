First: 
Unzip the aacgc_mohstats folder to your desktop, then upload that folder to your e107_plugins folder thru FTP. After it's uploaded go to your Plugin Manager and click Install next to the AACGC MOH Stats Plugin.

Second:
Create 2 extended user fields (user_moh , user_mohtype), to do this go to your e107 admin area (NOT the MOH plugin area) and you should see an icon named "Extended User Fields". In there on the menu to your right you should have an option "Add New Field". once you click that you need to fill in the options as follows:

for the first user field (user_moh):

Field name: user_moh (note is already has user_ added for you so all you need to type is moh)
Field text: MOH Username
Field Type: text box 
Required: No - Show on signup page 
Applicable: Members 
Read access: Everyone (public) 
Write access: Members 
Allow user to hide: No 

for the second user field (user_mohtype):

Field name: user_mohtype (note is already has user_ added for you so all you need to type is mohtype) 
Field text: MOH Platform
Field Type: Radio Buttons
Values: 
PC
PS3
Xbox360

(make sure you have a Captol letters like shown for each value)

Required: No - Show on signup page 
Applicable: Members 
Read access: Everyone (public) 
Write access: Members 
Allow user to hide: No 


Once you have created both extended user fileds user can then add the MOH names in their profiles as well as select what platform the play on. 


