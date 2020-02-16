 </div>
    </div>

<script src=”https://code.jquery.com/jquery-3.2.1.min.js” ></script>
<script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js”></script>
<script>
var btn = document.querySelector(‘#btn’);
var input = document.querySelector(‘#exampleInputFile’);

btn.setAttribute(‘disabled’, ‘disabled’);
input.onchange = function () {
btn.removeAttribute(‘disabled’, ‘disabled’);
}
</script>
   </body>
</html>