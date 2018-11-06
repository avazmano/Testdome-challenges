// JavaScript Document

function formatDate(userDate) {
  date = userDate.split('/');
   dateday = date[1];
  datemonth = date[0];
  if(dateday.toString().length == 1){
       dateday  = '0' + dateday.toString();
    console.log(dateday);
     }
    if(datemonth.toString().length == 1){
       datemonth  = '0' + datemonth.toString();
     console.log(dateday);
     }
  return date[2]+datemonth+dateday;
}

console.log(formatDate("12/3/2014"));