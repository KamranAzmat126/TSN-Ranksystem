<?PHP
$lang = array();
$lang['adduser']			= "User %s (unique Client-ID: %s; Client-database-ID %s) is unknown -> added to the Ranksystem now.";
$lang['changedbid']			= "User %s (unique Client-ID: %s) got a new TeamSpeak Client-database-ID (%s). Update the old Client-database-ID (%s) and reset collected times!";
$lang['crawl']				= "Scan for connected user and count the activity...";
$lang['clean']				= "Scan for clients, which have to delete...";
$lang['cleanc']				= "clean clients";
$lang['cleancdesc']			= "With this function the old clients in the Ranksystem get deleted.<br><br>To this end, the Ranksystem sychronized with the TeamSpeak database. Clients, which do not exist in TeamSpeak, will be deleted from the Ranksystem.<br><br>This function is only enabled when the 'Slowmode' is deactivated!<br><br><br>For automatic adjustment of the TeamSpeak database the ClientCleaner can be used:<br>http://ts-n.net/clientcleaner.php";
$lang['cleandel']			= "There were %s clients deleted out of the Ranksystem database, cause they were no longer existing in the TeamSpeak database.";
$lang['cleanno']			= "There were nothing to delete...";
$lang['cleanp']				= "clean period";
$lang['cleanpdesc']			= "Set a time that has to elapse before the 'clean clients' runs next.<br><br>Set a time in seconds.<br><br>Recommended is once a day, cause the client cleaning needs much time for bigger databases.";
$lang['cleanrs']			= "Clients in the Ranksystem database: %s";
$lang['cleants']			= "Clients found in the TeamSpeak database: %s (of %s)";
$lang['days']				= "%s <small>days</small>";
$lang['dbconerr']			= "Failed to connect to Database: ";
$lang['delcldgrpif']		= "Error while removing the knowledge for servergroups: %s";
$lang['delcldgrpsc']		= "Knowledge about servergroups for %s User successfully removed.";
$lang['delclientsif']		= "%s Clients deleted out of the Ranksystem database!";
$lang['delclientssc']		= "%s Clients successfully deleted out of the Ranksystem database!";
$lang['errlogin']			= "Username and/or password are incorrect! Try again...";
$lang['errlogin2']			= "Brute force protection: Try it again in %s seconds!";
$lang['errlogin3']			= "Brute force protection: To much misstakes. Banned for 300 Seconds!";
$lang['error']				= "Error ";
$lang['errremgrp']			= "Error while removing user with unique Client-ID %s out of the servergroup with servergroup-database-ID %s!";
$lang['errremdb']			= "Error while removing user with unique Client-ID %s out of the Ranksystem database!";
$lang['errselusr']			= "Please choose at least one user!";
$lang['errseltime']			= "Please enter an online time to add!";
$lang['errukwn']			= "An unknown error has occurred!";
$lang['errupcount']			= "Error while renewing the summary online time of %s by user with the unique Client-ID %s";
$lang['highest']			= "highest rank reached";
$lang['install']			= "Installation";
$lang['instdb']				= "Install database";
$lang['instdbsuc']			= "Database %s successfully created.";
$lang['insterr1']			= "ATTENTION: You are trying to install the Ranksystem, but there is already existing a database with the name \"%s\".<br>Due installation this database will be dropped!<br>Be sure you want this. If not, please choose an other database name.";
$lang['insterr2']			= "PDO is needed but seems not installed. Install <a href=\"http://php.net/manual/de/pdo.installation.php\" target=\"_blank\">PDO</a> and try it again!";
$lang['insterr3']			= "PHP exec function need to be enabled but seems to be disabled. Please enable the PHP <a href=\http://php.net/manual/de/function.exec.php\" target=\"_blank\">exec</a> function and try it again!";
$lang['insterr4']			= "Your PHP version (%s) is below 5.5.0. Update your PHP and try it again!";
$lang['insterr5']			= "SimpleXML is needed but seems not available. Install <a href=\"http://php.net/manual/en/simplexml.installation.php\" target=\"_blank\">simpleXML</a> and try it again!";
$lang['isntwicfg']			= "Can't save the database configuration! Please edit the 'other/dbconfig.php' with a chmod 0777 (on windows 'full access') and try again after.";
$lang['isntwicfg2']			= "Configurate Webinterface";
$lang['isntwichm']			= "Write Permissions failed on folder \"%s\". Please give them a chmod 777 (on windows 'full access') and try to start the Ranksystem again.";
$lang['isntwiconf']			= "Open the %s to configure the Ranksystem!";
$lang['isntwidbhost']		= "DB Hostaddress:";
$lang['isntwidbhostdesc']	= "Database server address<br>(IP or DNS)";
$lang['isntwidbmsg']		= "Database error: ";
$lang['isntwidbname']		= "DB Name:";
$lang['isntwidbnamedesc']	= "Name of database";
$lang['isntwidbpass']		= "DB Password:";
$lang['isntwidbpassdesc']	= "Password to access the database";
$lang['isntwidbtype']		= "DB Type:";
$lang['isntwidbtypedesc']	= "Database type<br><br>You have to install the needed PDO Driver.<br>For more informations have look at the requirements on http://ts-n.net/ranksystem.php";
$lang['isntwidbusr']		= "DB User:";
$lang['isntwidbusrdesc']	= "User to access the database";
$lang['isntwidel']			= "Please delete the file 'install.php' from your webserver";
$lang['isntwiusr']			= "User for the webinterface successfully created.";
$lang['isntwiusrcr']		= "Create Webinterface-User";
$lang['isntwiusrdesc']		= "Enter a username and password for access the webinterface. With the webinterface you can configurate the ranksytem.";
$lang['isntwiusrh']			= "Access - Webinterface";
$lang['listacsg']			= "actual servergroup";
$lang['listcldbid']			= "Client-database-ID";
$lang['listexcept']			= "No, cause excepted";
$lang['listgrps']			= "actual group since";
$lang['listip']				= "IP address";
$lang['listnick']			= "Clientname";
$lang['listnxsg']			= "next servergroup";
$lang['listnxup']			= "next rank up";
$lang['listrank']			= "rank";
$lang['listseen']			= "last seen";
$lang['listsuma']			= "sum. active time";
$lang['listsumi']			= "sum. idle time";
$lang['listsumo']			= "sum. online time";
$lang['listuid']			= "unique Client-ID";
$lang['login']				= "Login";
$lang['msg0001']			= "running version: %s";
$lang['msg0002']			= "Valid commands are:\n[B]help[/B], [B]info[/B], [B]commands[/B]\t\tget a command list\n[B]version[/B]\t\t\t\t\t\t\t\t  get the Ranksystem version\n[B]nextup[/B]\t\t\t\t\t\t\t\t   get the time to the next rank up\n[B]restart[/B], [B]reboot[/B]\t\t\t\t\trestart the Ranksystem bot\n[B]shutdown[/B], [B]quit[/B], [B]stop[/B]\t\t  stop the Ranksystem bot";
$lang['msg0003']			= "You are not eligible for this command!";
$lang['msg0004']			= "Client %s (%s) requests shutdown.";
$lang['msg0005']			= "cya";
$lang['msg0006']			= "brb";
$lang['msg0007']			= "Client %s (%s) requests restart.";
$lang['nocount']			= "User %s (unique Client-ID: %s; Client-database-ID %s) is a query-user or is several times online (only first connection counts) -> this will not count!";
$lang['noentry']			= "No entries found..";
$lang['pass']				= "Password";
$lang['pass2']				= "Change password";
$lang['pass3']				= "old password";
$lang['pass4']				= "new password";
$lang['pass5']				= "Forgot Password?";
$lang['queryname']			= "First Botname already in use. Trying with second Botname...";
$lang['repeat']				= "repeat";
$lang['sccrmcld']			= "User with unique Client-ID %s successfull removed from the Ranksystem database.";
$lang['sccupcount']			= "Added successfully an online time of %s seconds to the users with the unique Client-IDs (%s)";
$lang['setontime']			= "add time";
$lang['setontimedesc']		= "Add online time to the previous selected clients. Each user will get this time additional to their old online time.<br><br>The entered online time will be considered for the rank up and should take effect immediately.";
$lang['sgrpadd']			= "Grant servergroup %s to user %s (unique Client-ID: %s; Client-database-ID %s).";
$lang['sgrprerr']			= "It happened a problem with the servergroup of the user %s (unique Client-ID: %s; Client-database-ID %s)!";
$lang['sgrprm']				= "Removed servergroup %s from user %s (unique Client-ID: %s; Client-database-ID %s).";
$lang['stix0001']			= "Server statistics";
$lang['stix0002']			= "Total users";
$lang['stix0003']			= "View details";
$lang['stix0004']			= "Online time of all user / Total";
$lang['stix0005']			= "View top of all time";
$lang['stix0006']			= "View top of the month";
$lang['stix0007']			= "View top of the week";
$lang['stix0008']			= "Server usage";
$lang['stix0009']			= "In the last 7 days";
$lang['stix0010']			= "In the last 30 days";
$lang['stix0011']			= "In the last 24 hours";
$lang['stix0012']			= "select period";
$lang['stix0013']			= "Last day";
$lang['stix0014']			= "Last week";
$lang['stix0015']			= "Last month";
$lang['stix0016']			= "Active / inactive time (of all clients)";
$lang['stix0017']			= "Versions  (of all clients)";
$lang['stix0018']			= "Nationalities  (of all clients)";
$lang['stix0019']			= "Platforms  (of all clients)";
$lang['stix0020']			= "Current statistics";
$lang['stix0023']			= "Server status";
$lang['stix0024']			= "Online";
$lang['stix0025']			= "Offline";
$lang['stix0026']			= "Clients (Online / Max)";
$lang['stix0027']			= "Amount of channels";
$lang['stix0028']			= "Average server ping";
$lang['stix0029']			= "Total bytes received";
$lang['stix0030']			= "Total bytes sent";
$lang['stix0031']			= "Server uptime";
$lang['stix0032']			= "before offline:";
$lang['stix0033']			= "<span id=\"days\">00</span> Days, <span id=\"hours\">00</span> Hours, <span id=\"minutes\">00</span> Mins, <span id=\"seconds\">00</span> Secs";
$lang['stix0034']			= "Average packet loss";
$lang['stix0035']			= "Overall statistics";
$lang['stix0036']			= "Server name";
$lang['stix0037']			= "Server address (Host Address : Port)";
$lang['stix0038']			= "Server password";
$lang['stix0039']			= "No (Server is public)";
$lang['stix0040']			= "Yes (Server Is private)";
$lang['stix0041']			= "Server ID";
$lang['stix0042']			= "Server platform";
$lang['stix0043']			= "Server version";
$lang['stix0044']			= "Server creation date (dd/mm/yyyy)";
$lang['stix0045']			= "Report to server list";
$lang['stix0046']			= "Activated";
$lang['stix0047']			= "Not activated";
$lang['stix0048']			= "not enough data yet...";
$lang['stix0049']			= "Online time of all user / month";
$lang['stix0050']			= "Online time of all user / week";
$lang['stix0051']			= "TeamSpeak has failed, so no creation date...";
$lang['stix0052']			= "others";
$lang['stix0053']			= "Active Time (in Days)";
$lang['stix0054']			= "Inactive Time (in Days)";
$lang['stmy0001']			= "My statistics";
$lang['stmy0002']			= "Rank";
$lang['stmy0003']			= "Database ID:";
$lang['stmy0004']			= "Unique ID:";
$lang['stmy0005']			= "Total connections to the server:";
$lang['stmy0006']			= "Start date for statistics:";
$lang['stmy0007']			= "Total online time:";
$lang['stmy0008']			= "Online time last 7 days:";
$lang['stmy0009']			= "Online time last 30 days:";
$lang['stmy0010']			= "Achievements completed:";
$lang['stmy0011']			= "Time achievement progress";
$lang['stmy0012']			= "Time: Legendary";
$lang['stmy0013']			= "Because you have an online time of %s  hours.";
$lang['stmy0014']			= "Progress completed";
$lang['stmy0015']			= "Time: Gold";
$lang['stmy0016']			= "% Completed for Legendary";
$lang['stmy0017']			= "Time: Silver";
$lang['stmy0018']			= "% Completed for Gold";
$lang['stmy0019']			= "Time: Bronze";
$lang['stmy0020']			= "% Completed for Silver";
$lang['stmy0021']			= "Time: Unranked";
$lang['stmy0022']			= "% Completed for Bronze";
$lang['stmy0023']			= "Connection achievement progress";
$lang['stmy0024']			= "Connects: Legendary";
$lang['stmy0025']			= "Because You connected %s times to the server.";
$lang['stmy0026']			= "Connects: Gold";
$lang['stmy0027']			= "Connects: Silver";
$lang['stmy0028']			= "Connects: Bronze";
$lang['stmy0029']			= "Connects: Unranked";
$lang['stmy0030']			= "Progress next servergroup";
$lang['stnv0001']			= "Server news";
$lang['stnv0002']			= "Close";
$lang['stnv0003']			= "Refresh client information";
$lang['stnv0004']			= "Only use this refresh, when your TS3 information got changed, such as your TS3 username";
$lang['stnv0005']			= "It only works, when you are connected to the TS3 server at the same time";
$lang['stnv0006']			= "Refresh";
$lang['stnv0007']			= "Battle area - Page content";
$lang['stnv0008']			= "You can challenge other users in a battle between two users or two teams.";
$lang['stnv0009']			= "While the battle is active the online time of the teams/users will be counted.";
$lang['stnv0010']			= "When the battle ends the team/user with the highest online time wins.";
$lang['stnv0011']			= "(The regular battling time is 48 hours)";
$lang['stnv0012']			= "The winning team/user will recieve a price, which the user can use whenever the user wants.";
$lang['stnv0013']			= "It will be displayed on the <a href=\"my_stats.php\">My statistics</a> tab.";
$lang['stnv0014']			= "(Could be online time boost(2x) for 8 hours, instant online time (4 hours), etc.";
$lang['stnv0015']			= "These boosts can be used for example to climb in the top users of the week.";
$lang['stnv0016']			= "Not available";
$lang['stnv0017']			= "You are not connected to the TS3 Server, so it can't display any data for you.";
$lang['stnv0018']			= "Please connect to the TS3 Server and then Refresh your Session by pressing the blue Refresh Button at the top-right corner.";
$lang['stnv0019']			= "My statistics - Page content";
$lang['stnv0020']			= "This page contains a overall summary of your personal statistics and activity on the server.";
$lang['stnv0021']			= "The informations are collected since the beginning of the Ranksystem, they are not since the beginning of the TeamSpeak server.";
$lang['stnv0022']			= "This page receives its values out of a database. So the values might be delayed a bit.";
$lang['stnv0023']			= "The sum inside of the donut charts may differ to the amount of 'Total user'. The reason is that this data weren't collected with older versions of the Ranksystem.";
$lang['stnv0024']			= "Ranksystem - Statistics";
$lang['stnv0025']			= "Limit entries";
$lang['stnv0026']			= "all";
$lang['stnv0027']			= "The informations on this site could be outdated! It seems the Ranksystem is no more connected to the TeamSpeak.";
$lang['stnv0028']			= "(You are not connected to the TS3!)";
$lang['stnv0029']			= "List Rankup";
$lang['stnv0030']			= "Ranksystem info";
$lang['stnv0031']			= "About the search field you can search for pattern in clientname, unique Client-ID and Client-database-ID.";
$lang['stnv0032']			= "You can also use a view filter options (see below). Enter the filter also inside the search field.";
$lang['stnv0033']			= "Combination of filter and search pattern are possible. Enter first the filter(s) followed without any sign your search pattern.";
$lang['stnv0034']			= "Also it is possible to combine multiple filters. Enter this consecutively inside the search field.";
$lang['stnv0035']			= "<u>Example:</u><br>filter:nonexcepted:TeamSpeakUser";
$lang['stnv0036']			= "Show only clients, which are excepted (client, servergroup or channel exception).";
$lang['stnv0037']			= "Show only clients, which are not excepted.";
$lang['stnv0038']			= "Show only clients, which are online.";
$lang['stnv0039']			= "Show only clients, which are not online.";
$lang['stnv0040']			= "Show only clients, which are in defined group. Represent the actuel rank/level.<br>Replace <i>GROUPID</i> with the wished servergroup ID.";
$lang['stnv0041']			= "Show only clients, which are selected by lastseen.<br>Replace <i>OPERATOR</i> with '<' or '>' or '=' or '!='.<br>And replace <i>TIME</i> with a timestamp or date with format 'Y-m-d H-i' (example: 2016-06-18 20-25).<br>Full example: filter:lastseen:<:2016-06-18 20-25:";
$lang['stnv0042']			= "Show only clients, which are from defined country.<br>Replace <i>TS3-COUNTRY-CODE</i> with the wished country.<br>For list of codes google for ISO 3166-1 alpha-2";
$lang['stnv0043']			= "connect TS3";
$lang['stri0001']			= "Ranksystem information";
$lang['stri0002']			= "What is the Ranksystem?";
$lang['stri0003']			= "A TS3 Bot, which automatically grant ranks (servergroups) to user on a TeamSpeak 3 Server for online time or online activity. It also gathers informations and statistics about the user and displays the result on this site.";
$lang['stri0004']			= "Who created the Ranksystem?";
$lang['stri0005']			= "When the Ranksystem was Created?";
$lang['stri0006']			= "First alpha release: 05/10/2014.";
$lang['stri0007']			= "First beta release: 01/02/2015.";
$lang['stri0008']			= "You can see the newest version on the <a href=\"http://ts-n.net/ranksystem.php\" target=\"_blank\">Ranksystem Website</a>.";
$lang['stri0009']			= "How was the Ranksystem created?";
$lang['stri0010']			= "The Ranksystem is coded in";
$lang['stri0011']			= "It uses also the following libraries:";
$lang['stri0012']			= "Special Thanks To:";
$lang['stri0013']			= "<a href=\"http://nya-pw.ru/\" target=\"_blank\">sergey</a>, <a href=\"http://vk.com/akhachirov\" target=\"_blank\">Arselopster</a> & <a href=\"http://vk.com/zheez\" target=\"_blank\">DeviantUser</a> - for russian translation";
$lang['stri0014']			= "Bejamin Frost - for initialisation the bootstrap design";
$lang['stri0015']			= "<a href=\"http://hydrake.eu/\" target=\"_blank\">ZanK</a> - for italian translation";
$lang['stri0016']			= "<a href=\"http://iraqgaming.net/\" target=\"_blank\">DeStRoYzR</a> & <a href=\"http://www.sagamer.net/\" target=\"_blank\">Jehad</a> - for initialisation arabic translation";
$lang['stri0017']			= "<a href=\"http://whitecs.ro/\" target=\"_blank\">SakaLuX</a> - for initialisation romanian translation";
$lang['sttw0001']			= "Top users";
$lang['sttw0002']			= "Of the week";
$lang['sttw0003']			= "With %s hours online time";
$lang['sttw0004']			= "Top 10 compared";
$lang['sttw0005']			= "Hours (Defines 100 %)";
$lang['sttw0006']			= "%s hours (%s&#37;)";
$lang['sttw0007']			= "Top 10 Statistics";
$lang['sttw0008']			= "Top 10 vs others in online time";
$lang['sttw0009']			= "Top 10 vs others in active time";
$lang['sttw0010']			= "Top 10 vs others in inactive time";
$lang['sttw0011']			= "Top 10 (in hours)";
$lang['sttw0012']			= "Other %s users (in hours)";
$lang['sttw0013']			= "With %s hours active time";
$lang['sttm0001']			= "Of the month";
$lang['stta0001']			= "Of all time";
$lang['upinf']				= "A new Version of the Ranksystem is available; Inform clients on server...";
$lang['upmsg']				= "\nHey, a new version of the [B]Ranksystem[/B] is available!\n\ncurrent version: %s\n[B]new version: %s[/B]\n\nPlease check out our site for more informations [URL]http://ts-n.net/ranksystem.php[/URL].";
$lang['upsucc']				= "Database update successfully executed.";
$lang['upuser']				= "User %s (unique Client-ID: %s; Client-database-ID %s) gets a new count (sum. online time) of %s (thereof active %s).";
$lang['upuserboost']		= "User %s (unique Client-ID: %s; Client-database-ID %s) gets a new count (sum. online time) of %s (thereof active %s) <b>[BOOST %sx]</b>.";
$lang['upusrerr']			= "The unique Client-ID %s couldn't reached on the TeamSpeak!";
$lang['upusrinf']			= "User %s was successfully informed.";
$lang['user']				= "Username";
$lang['wi']					= "Webinterface";
$lang['wiaction']			= "action";
$lang['wiadmhide']			= "hide excepted clients";
$lang['wiadmhidedesc']		= "To hide excepted user in the following selection";
$lang['wiadmuuid']			= "admin ID";
$lang['wiadmuuiddesc']		= "Enter here your unique Client-ID; as the administrator of the Ranksystem.<br><br>This is required to reset the password of the webinterface.<br><br>Is there no unique Client-ID address defined, it is not possible to reset the password!";
$lang['wiboost']			= "boost";
$lang['wiboostdesc']		= "Give an user on your TeamSpeak server a servergroup (have to be created manually), which you can declare here as boost group. Define also a factor which should be used (for example 2x) and a time, how long the boost should be rated.<br>The higher the factor, the faster an user reaches the next higher rank.<br>Is the time expired, the boost servergroup get automatically removed from the concerned user. The time starts running as soon as the user gets the servergroup.<br><br>servergroup ID => factor => time (in seconds)<br><br>Each entry have to separate from next with a comma.<br><br>Example:<br>12=>2=>6000,13=>3=>2500,14=>5=>600<br><br>On this an user in servergroup 12 get the factor 2 for the next 6000 seconds, an user in servergroup 13 get the factor 3 for 2500 seconds, and so on...";
$lang['wibot1']				= "Ranksystem Bot should be stopped. Check the log below for more information!";
$lang['wibot2']				= "Ranksystem Bot should be started. Check the log below for more information!";
$lang['wibot3']				= "Ranksystem Bot should be restarted. Check the log below for more information!";
$lang['wibot4']				= "Start / Stop Ranksystem Bot";
$lang['wibot5']				= "Start Bot";
$lang['wibot6']				= "Stop Bot";
$lang['wibot7']				= "Restart Bot";
$lang['wibot8']				= "Ranksystem log (extract):";
$lang['wibot9']				= "Fill out all mandatory fields before starting the Ranksystem Bot!";
$lang['wichdbid']			= "Client-database-ID reset";
$lang['wichdbiddesc']		= "Reset the online time of an user, if his TeamSpeak Client-database-ID changed.<br><br>Example:<br>If a clients gets removed from the TeamSpeak server, it gets a new Client-database-ID with the next connect to the server.";
$lang['wiconferr']			= "There is an error in the configuration of the Ranksystem. Please go to the webinterface and correct the Core Settings. Especially check the config 'rank up'!";
$lang['wichpw1']			= "Your old password is wrong. Please try again";
$lang['wichpw2']			= "The new passwords dismatch. Please try again.";
$lang['wichpw3']			= "The password of the webinterface has been successfully changed. Request from IP %s.";
$lang['wichpw4']			= "Change Password";
$lang['widaform']			= "Date format";
$lang['widaformdesc']		= "Choose the showing date format.<br><br>Example:<br>%a days, %h hours, %i mins, %s secs";
$lang['widbcfgsuc']			= "Database configurations saved successfully.";
$lang['widbcfgerr']			= "Error while saving the database configurations! Connection failed or writeout error for 'other/dbconfig.php'";
$lang['widelcld']			= "delete clients";
$lang['widelcldgrp']		= "renew groups";
$lang['widelcldgrpdesc']	= "The Ranksystem remember the given servergroups, so it don't need to give/check this with every run of the worker.php again.<br><br>With this function you can remove once time the knowledge of given servergroups. In effect the ranksystem try to give all clients (which are on the TS3 server online) the servergroup of the actual rank.<br>For each client, which gets the group or stay in group, the Ranksystem remember this like described at beginning.<br><br>This function can be helpful, when user are not in the servergroup, they should be for the defined online time.<br><br>Attention: Run this in a moment, where the next few minutes no rankups become due!!! The Ranksystem can't remove the old group, cause it can't remember ;-)";
$lang['widelclddesc']		= "Delete the before selected clients out of the Ranksystem database.<br><br>With this deletion are the clients on the TeamSpeak Server untouched.";
$lang['widelsg']			= "remove out of servergroups";
$lang['widelsgdesc']		= "Choose if the clients should also be removed out of the last known servergroup, when you delete clients out of the Ranksystem database.<br><br>It will only considered servergroups, which concerned the Ranksystem";
$lang['wideltime']			= "Deletiontime";
$lang['wideltimedesc']		= "Clean old clients out of the Ranksystem database.<br>Entry a time in seconds which a client was not seen to delete it.<br><br>0 - deletes all clients out of the Ranksystem<br><br>The Userdatas on the TeamSpeak server are with this untouched!";
$lang['wiexcid']			= "channel exception";
$lang['wiexciddesc']		= "A comma separated list of the channel-IDs that are not to participate in the Ranksystem.<br><br>Stay users in one of the listed channels, the time there will be completely ignored. There is neither the online time, yet the idle time counted.<br><br>Sense does this function only with the mode 'online time', cause here could be ignored AFK channels for example.<br>With the mode 'active time', this function is useless because as would be deducted the idle time in AFK rooms and thus not counted anyway.<br><br>Be a user in an excluded channel, it is noted for this period as 'excluded from the Ranksystem'. The user dows no longer appears in the list 'stats/list_rankup.php' unless excluded clients should not be displayed there (Stats Page - excepted client).";
$lang['wiexgrp']			= "servergroup exception";
$lang['wiexgrpdesc']		= "A comma seperated list of servergroup-IDs, which should not conside for the Ranksystem.<br>User in at least one of this servergroups IDs will be ignored for the rank up.";
$lang['wiexuid']			= "client exception";
$lang['wiexuiddesc']		= "A comma seperated list of unique Client-IDs, which should not conside for the Ranksystem.<br>User in this list will be ignored for the rank up.";
$lang['wigrptime']			= "rank up definition";
$lang['wigrptimedesc']		= "Define here after which time a user should get automatically a predefined servergroup.<br><br>time (seconds)=>servergroup ID<br><br>Important for this is the 'online time' or the 'active time' of an user, depending on setting of the mode.<br><br>Each entry have to separate from next with a comma.<br><br>The time must be entered cumulative<br><br>Example:<br>60=>9,120=>10,180=>11<br><br>On this a user get after 60 seconds the servergroup 9, in turn after 60 seconds the servergroup 10, and so on...";
$lang['wihladm']			= "List Rankup (Admin-Mode)";
$lang['wihladm1']			= "Add online Time to User";
$lang['wihlcfg']			= "Core settings";
$lang['wihldb']				= "Database settings";
$lang['wihlmsg']			= "Message settings";
$lang['wihlsty']			= "Stats page settings";
$lang['wihlts']				= "TeamSpeak settings";
$lang['wihlvs']				= "Various settings";
$lang['wiignidle']			= "Ignore idle";
$lang['wiignidledesc']		= "Define a period, up to which the idle time of an user will be ignored.<br><br>When a client does not do anything on the server (=idle), this time is noted by the Ranksystem. With this feature the idle time of an user will not be counted until the defined limit. Only when the defined limit is exceeded, it counts from that date for the Ranksystem as idle time.<br><br>This function plays only in conjunction with the mode 'active time' a role.<br><br>Meaning the function is e.g. to evaluate the time of listening in conversations as activity.<br><br>0 = disable the feature<br><br>Example:<br>Ignore idle = 600 (seconds)<br>A client has an idle of 8 minuntes<br>consequence:<br>8 minutes idle are ignored and he therefore receives this time as active time. If the idle time now increased to over 12 minutes so the time is over 10 minutes, and in this case 2 minutes would be counted as idle time.";
$lang['wilog']				= "Logpath";
$lang['wilogdesc']			= "Path of the log file of the Ranksystem.<br><br>Example:<br>/var/logs/ranksystem/<br><br>Be sure, the webuser has the write-permissions to the logpath.";
$lang['wimsgmsg']			= "Message";
$lang['wimsgmsgdesc']		= "Define a message, which will be send to an user, when he rises the next higher rank.<br><br>This message will be send via TS3 private message. So every know bb-code could be used, which also works for a normal private message.<br>http://ts-n.net/lexicon.php?showid=97#lexindex<br><br>Furthermore, the previously spent time can be expressed by arguments:<br>%1\$s - days<br>%2\$s - hours<br>%3\$s - minutes<br>%4\$s - seconds<br><br>Example:<br>Hey,\\nyou reached a higher rank, since you already connected for %1\$s days, %2\$s hours and %3\$s minutes to our TS3 server.[B]Keep it up![/B] ;-)";
$lang['wimsgsn']			= "Server-News";
$lang['wimsgsndesc']		= "Define a message, which will be shown on the /stats/ page as server news.<br><br>You can use default html functions to modify the layout<br><br>Example:<br>&#60b&#62; - <b>for bold</b><br>&#60u&#62; - <u>for underline</u><br>&#60i&#62; - <i>for italic</i><br>&#60br&#62; - for word-wrap (new line)";
$lang['wilogout']			= "Logout";
$lang['wimsgusr']			= "Rank up notification";
$lang['wimsgusrdesc']		= "Inform an user with a private text message about his rank up.";
$lang['winav1']				= "TeamSpeak";
$lang['winav2']				= "Database";
$lang['winav3']				= "Core";
$lang['winav4']				= "Other";
$lang['winav5']				= "Message";
$lang['winav6']				= "Stats page";
$lang['winav7']				= "Administrate";
$lang['winav8']				= "Start / Stop Bot";
$lang['winav9']				= "Update available!";
$lang['winav10']			= "Please use the webinterface only via %s HTTPS%s An encryption is critical to ensure your privacy and security.%sTo be able to use HTTPS your webserver needs to support an SSL connection.";
$lang['winav11']			= "Please enter the unique Client-ID of the admin of the Ranksystem (Other -> admin ID). This is very important in case you lost your login details for the webinterface (to reset these).";
$lang['winxinfo']			= "Command \"nextup\"";
$lang['winxinfodesc']		= "Allows the user on the TS3 server to write the command \"nextup\" to the Ranksystem (query) bot as private textmessage.<br><br>As answer the user will get a defined text message with the needed time for the next rankup.";
$lang['winxmsg1']			= "Message";
$lang['winxmsgdesc1']		= "Define a message, which the user will get as answer at the command \"nextup\".<br><br>Arguments:<br>%1\$s - days to next rankup<br>%2\$s - hours to next rankup<br>%3\$s - minutes to next rankup<br>%4\$s - seconds to next rankup<br>%5\$s - name of the next servergroup<br><br>Example:<br>Your next rank up will be in %1\$s days, %2\$s hours and %3\$s minutes and %4\$s seconds. The next servergroup you will reach is [B]%5\$s[/B].";
$lang['winxmsg2']			= "Message (highest)";
$lang['winxmsgdesc2']		= "Define a message, which the user will get as answer at the command \"nextup\", when the user already reached the highest rank.<br><br>Arguments:<br>%1\$s - days to next rankup<br>%2\$s - hours to next rankup<br>%3\$s - minutes to next rankup<br>%4\$s - seconds to next rankup<br>%5\$s - name of the next servergroup<br><br>Example:<br>You have already reached the highest rank.";
$lang['winxmsg3']			= "Message (excepted)";
$lang['winxmsgdesc3']		= "Define a message, which the user will get as answer at the command \"nextup\", when the user is excepted from the Ranksystem.<br><br>Arguments:<br>%1\$s - days to next rankup<br>%2\$s - hours to next rankup<br>%3\$s - minutes to next rankup<br>%4\$s - seconds to next rankup<br>%5\$s - name of the next servergroup<br><br>Example:<br>You are excepted from the Ranksystem. If you wish to rank contact an admin on the TS3 server.";
$lang['wirtpw1']			= "Sorry Bro, you have forgotten to enter your admin ID inside the webinterface before. There is no way to reset the password!";
$lang['wirtpw2']			= "Admin ID not found on TS3 server. You need to be online with the unique Client ID, which is saved as admin ID.";
$lang['wirtpw3']			= "Your IP address do not match with the IP address of the admin on the TS3 server. Be sure you are with the same IP address online on the TS3 server and also on this page (same protocol IPv4 / IPv6 is also needed).";
$lang['wirtpw4']			= "\nThe password for the webinterface was successfully reset.\nUsername: %s\nPassword: [B]%s[/B]\n\nLogin %shere%s";
$lang['wirtpw5']			= "There was send a TeamSpeak3 privat textmessage to the admin with the new password. Click %s here %s to login.";
$lang['wirtpw6']			= "The password of the webinterface has been successfully reset. Request from IP %s.";
$lang['wirtpw7']			= "Reset Password";
$lang['wirtpw8']			= "Here you can reset the password for the webinterface.";
$lang['wirtpw9']			= "Following things are required to reset the password:";
$lang['wirtpw10']			= "You need to be online at the TeamSpeak3 server.";
$lang['wirtpw11']			= "You need to be online with the unique Client-ID, which is saved as admin ID.";
$lang['wirtpw12']			= "You need to be online with the same IP address on the TeamSpeak3 server as here on this page (also the same protocol IPv4 / IPv6).";
$lang['wiselcld']			= "select clients";
$lang['wiselclddesc']		= "Select the clients by their last known username, unique Client-ID or Client-database-ID.<br>Multiple selections are also possible.<br><br>On bigger databases this selection could slow much. It is recommend to copy and paste the full nickname inside instead of typing it.";
$lang['wishcolas']			= "actual servergroup";
$lang['wishcolasdesc']		= "Show column 'actual servergroup' in list_rankup.php";
$lang['wishcolat']			= "active time";
$lang['wishcolatdesc']		= "Show column 'sum. active time' in list_rankup.php";
$lang['wishcolcld']			= "Client-name";
$lang['wishcolclddesc']		= "Show column 'Client-name' in list_rankup.php";
$lang['wishcoldbid']		= "database-ID";
$lang['wishcoldbiddesc']	= "Show column 'Client-database-ID' in list_rankup.php";
$lang['wishcolgs']			= "actual group since";
$lang['wishcolgsdesc']		= "Show column 'actual group since' in list_rankup.php";
$lang['wishcolit']			= "idle time";
$lang['wishcolitdesc']		= "Show column 'sum idle time' in list_rankup.php";
$lang['wishcolls']			= "last seen";
$lang['wishcollsdesc']		= "Show column 'last seen' in list_rankup.php";
$lang['wishcolnx']			= "next rank up";
$lang['wishcolnxdesc']		= "Show column 'next rank up' in list_rankup.php";
$lang['wishcolot']			= "online time";
$lang['wishcolotdesc']		= "Show column 'sum. online time' in list_rankup.php";
$lang['wishcolrg']			= "rank";
$lang['wishcolrgdesc']		= "Show column 'rank' in list_rankup.php";
$lang['wishcolsg']			= "next servergroup";
$lang['wishcolsgdesc']		= "Show column 'next servergroup' in list_rankup.php";
$lang['wishcoluuid']		= "Client-ID";
$lang['wishcoluuiddesc']	= "Show column 'unique Client-ID' in list_rankup.php";
$lang['wishexcld']			= "excepted client";
$lang['wishexclddesc']		= "Show clients in list_rankup.php,<br>which are excluded and therefore not participate in the Ranksystem.";
$lang['wishexgrp']			= "excepted groups";
$lang['wishexgrpdesc']		= "Show clients in list_rankup.php, which are in the list 'client exception' and shouldn't be conside for the Ranksystem.";
$lang['wishhicld']			= "Clients in highest Level";
$lang['wishhiclddesc']		= "Show clients in list_rankup.php, which reached the highest level in the Ranksystem.";
$lang['wishnav']			= "show site-navigation";
$lang['wishnavdesc']		= "Show the site navigation on 'stats/' page.<br><br>If this option is deactivated on the stats page the site navigation will be hidden.<br>You can then take each site i.e. 'stats/list_rankup.php' and embed this as frame in your existing website or bulletin board.";
$lang['wisupidle']			= "Mode";
$lang['wisupidledesc']		= "There are two modes, as time can be counted and can then apply for a rank increase.<br><br>1) online time: Here the pure online time of the user is taken into account (see column 'sum. online time' in the 'stats/list_rankup.php')<br><br>2) active time: This will be deducted from the online time of a user, the inactive time (idle) (see column 'sum. active time' in the 'stats/list_rankup.php').<br><br>A change of mode with an already longer running database is not recommended, but may work.";
$lang['wisvconf']			= "save";
$lang['wisvsuc']			= "Changes successfully saved!";
$lang['wisvres']			= "You need to restart the Ranksystem before the changes will take effect!";
$lang['witime']				= "Timezone";
$lang['witimedesc']			= "Select the timezone the server is hosted.";
$lang['wits3dch']			= "Default Channel";
$lang['wits3dchdesc']		= "The channel-ID, the bot should connect with.<br><br>The Bot will join this channel after connecting to the TeamSpeak server.";
$lang['wits3host']			= "TS3 Hostaddress";
$lang['wits3hostdesc']		= "TeamSpeak 3 Server address<br>(IP oder DNS)";
$lang['wits3sm']			= "Slowmode";
$lang['wits3smdesc']		= "With the Slowmode you can reduce \"spam\" of query commands to the TeamSpeak server. This prevent bans in case of flood.<br>TeamSpeak Query commands get delayed with this function.<br><br>!!! ALSO IT REDUCE THE CPU USAGE !!!<br><br>The activation is not recommended, if not required. The delay increases the duration of the Bot, which makes it imprecisely.";
$lang['wits3qnm']			= "Botname";
$lang['wits3qnm2']			= "2nd Botname";
$lang['wits3qnm2desc']		= "A fallback Botname, if the first one is already in use.";
$lang['wits3qnmdesc']		= "The name, with this the query-connection will be established.<br>You can name it free.";
$lang['wits3querpw']		= "TS3 Query-Password";
$lang['wits3querpwdesc']	= "TeamSpeak 3 query password<br>Password for the query user.";
$lang['wits3querusr']		= "TS3 Query-User";
$lang['wits3querusrdesc']	= "TeamSpeak 3 query username<br>Default is serveradmin<br>Of course, you can also create an additional serverquery account only for the Ranksystem.<br>The needed permissions you find on:<br>http://ts-n.net/ranksystem.php";
$lang['wits3query']			= "TS3 Query-Port";
$lang['wits3querydesc']		= "TeamSpeak 3 query port<br>Default is 10011 (TCP)<br>If its not default, you should find it in your 'ts3server.ini'.";
$lang['wits3voice']			= "TS3 Voice-Port";
$lang['wits3voicedesc']		= "TeamSpeak 3 voice port<br>Default is 9987 (UDP)<br>This is the port, you uses also to connect with the TS3 Client.";
$lang['wiupcheck']			= "Update info";
$lang['wiupcheckdesc']		= "If the Update info is enable, the listed user gets a notification with a private text message, once an update is available.";
$lang['wiuptime']			= "Interval";
$lang['wiuptimedesc']		= "Enter here how much seconds have to gone till the Ranksystem should check for available updates.<br><br>Attention, for each check the listed user gets a notification. If no one of the listed users is online, the Ranksystem will try to notificate with the next interval.";
$lang['wiupuid']			= "Recipient";
$lang['wiupuiddesc']		= "A comma separate list of unique Client-IDs, which shoud be informed on the TeamSpeak via private message for available updates.";
$lang['wivlang']			= "Language";
$lang['wivlangdesc']		= "Choose a default language for the Ranksystem.<br><br>The language is also selectable on the websites for the users and will be stored for the session.";
?>