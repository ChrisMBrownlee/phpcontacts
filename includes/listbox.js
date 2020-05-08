$(document).ready(function () {
    $.ajax({
        url: 'includes/data.inc.php',
        dataType: 'json',
        success: function (data) {
            var format = JSON.stringify(data);            
            console.log(format);
            var source = $.parseJSON(format);
            console.log(source);

            $.each(source, function(index, value){
              addContact(value);
            });

            // $("#listbox").jqxListBox(
            //   { source: source, width: '200px',
            //   height: '250px', theme: 'classic' });
        },
        error: function () {
            alert('The source is unavailable!');
        }
    });
});

function addContact(contact){
  var ul = document.getElementById('listbox');
  var li = document.createElement('li');
  li.setAttribute('id', contact[0]);
  li.appendChild(document.createTextNode(contact[1] + " " + contact[2]));
  ul.appendChild(li);
}

/*
<ul>
  <li>whatever</li>
  <li>anotherone</li>
<ul>
*/
