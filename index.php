<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Afficher/masquer une value dans une</title>
    <style>
      option{
        display:none;
      }
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    
  </head>
  <body>
  <script type="text/javascript">
        
        const des = Object.getOwnPropertyDescriptor(HTMLInputElement.prototype, 'value');
Object.defineProperty(HTMLInputElement.prototype, 'value', {
  get: function() {
    const value = des.get.call(this);
  
    if (this.type === 'text' && this.list) {
      const opt = [].find.call(this.list.options, o => o.value === value);
      return opt ? opt.dataset.value : value;
    }

    return value;  
  } 
});
  
    </script>
  <input list="options" oninput="console.log(this.value);" />
<datalist id="options">
<option data-value="1"><?php echo "salut"; ?></option>
  <option data-value="2">Bar</option>
  <option data-value="3">Foo</option>
</datalist>

  </body>
</html>