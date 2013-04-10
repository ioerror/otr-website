function formatFullDate(postTime)
{
  var timeFormat;
  var postStamp=new Date(postTime);
  var month=new Array('January','February','March','April','May','June','July','August','September','October','November','December');
  var postMonth=month[postStamp.getMonth()];
  var postYear=postStamp.getYear();
  if (postYear < 1900 ) {
	postYear= postYear+1900;
  }
/*
  var postHour=postStamp.getHours();
  var postM;

  if (postHour<13)
  {
    postM="AM";
    if (!postHour) postHour=12;
  }
  else
  {
    postM="PM";
    postHour=postHour-12;
  }
*/

  timeFormat=postMonth+" "+postStamp.getDate()+", "+postYear ;
  //timeFormat=postMonth+" "+postStamp.getDate()+", "+postYear+", "+postHour+":"+postStamp.getMinutes()+" PDT";
  return timeFormat;
}


function timeDifference(postTime,serverTimeIn)
{
  var diffString="";
  now = new Date;
  //serverTime = now.getTime();
  serverTime = serverTimeIn;
  if (!serverTime)
  {
    //diffString="Time server not found.<br />Time display is: "+formatFullDate(postTime);
    diffString="";
    return diffString;
  }
  if (serverTime<postTime)
  {
    diffString=formatFullDate(postTime);
    return diffString;
  }

  agoUT=serverTime-postTime;

  days=1000*60*60*24;
  if (agoUT>days)
  {
    //diffString="Time difference is greater than 24 hours.<br />Time display is: "+formatFullDate(postTime);
    diffString=formatFullDate(postTime);
    return diffString;
  }

  mins=1000*60;
  hrs=1000*60*60;

  hoursAgo=Math.floor((agoUT%days)/hrs);
  minutesAgo=Math.floor((agoUT%hrs)/mins);
  secondsAgo=Math.floor((agoUT%mins)/1000);
  hoursMess=(hoursAgo)?hoursAgo+" hour":false;
  minutesMess=(minutesAgo)?minutesAgo+" minute":false;
  secondsMess=(secondsAgo)?secondsAgo+" second":false;

  if (hoursMess)
  {
    diffString+=hoursMess;
    if (hoursAgo>1) diffString+="s";
    if (minutesMess || secondsMess) diffString+=", ";
  }
  if (minutesMess)
  {
    diffString+=minutesMess;
    if (minutesAgo>1) diffString+="s";
    //if (secondsMess) diffString+=", ";
  }
  /*if (secondsMess)
  {
    diffString+=secondsMess;
    if (secondsAgo>1) diffString+="s";
  } */
  diffString+=" ago";

  return diffString;
}