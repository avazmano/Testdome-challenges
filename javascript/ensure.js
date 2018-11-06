function ensure(value) {
     if(value === undefined){
         throw 'undefined value';
        }else{
          return value;
        }
}
ensure(1);
ensure('');
ensure('44');