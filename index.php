<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Afficher/masquer une value dans une datalist</title>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
  </head>
  <body>
  <input list="options" oninput="console.log(this.value);" />
<datalist id="options">
  <option value="1">Foo</option>
  <option value="2">Bar</option>
  <option value="3">Foo</option>
</datalist>
<script type="text/javascript">
        document.querySelector('input').addEventListener('input', event => {
  const value = event.target.value;
  const opt = [].find.call(event.target.list.options, o => o.value === value);

  if (opt) {
    event.target.value = opt.textContent;
  }
});
  
    </script>
  </body>
</html>