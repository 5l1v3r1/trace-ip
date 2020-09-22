<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m

   }\033[01;31m_________________________ShuBhamg0sain___________________\033[01;31m{
   }\033[01;31m_________ShuBhamg0sain_______/\___|_|_|__\_______________\033[01;31m{  
   }\033[01;31m_________|_|_| '__/ _` |/ __/ _ \_| | |_) |______________\033[01;31m{
   }\033[01;32m_________| |_| | | (_| | (_|  __/_| |  __/_______________\033[01;32m{
   }\033[01;32m_________\_ _|_|  \__,_|\___\___|__|_|_|_________________\033[01;32m{
   }\033[01;32m____________________Trace IPLocation_____________________\033[01;32m{
 
     \033[01;37m}\033[01;31m----------------------------------------\033[01;37m
    \033[01;31m-------------- \033[01;32mTrace IPLocation\033[01;31m--\033[01;37m
  \033[01;31m----------------ShuBhamg0sain-----------------------------\033[01;37m

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mTool Name \033[01;37m:- \033[01;36mTrace-ip
         \033[01;33mAuthor \033[01;37m:- \033[01;36mShuBhamg0sain
         \033[01;33mmail  \033[01;37m:- \033[01;36msgosain18122001@mail.com]
EOL;
  $getact = readline(' Trace-ip >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating Trace-ip.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/ShuBhamg0sain/Trace-ip.git");
  system("cd ~/ && sudo git clone https://github.com/rajkumardusad/IP-Tracer.git");
  system("cd ~/IP-Tracer && sh install");
  logo();
  echo "\n\033[01;32m              IP-Tracer updated !!!\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mTrack IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mTrack Your IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mAbout us.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mHelp.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mUpdate IP-Tracer.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mExit \n\n\033[00m";
  $inp = readline('  IP-Tracer >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Exiting .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  By ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Invalid Command \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>
