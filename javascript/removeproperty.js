// JavaScript Document


obj = new Object();
obj.prop = 1;

function removeProperty(obj, prop) {
  if(obj.hasOwnProperty(prop)){
        delete obj[prop];
        return true;
     }else{
        return false;
     }  
}

console.log(removeProperty(obj, 'props'));