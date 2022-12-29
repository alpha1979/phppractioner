<?php require('partials/head.php') ?>
<form action="/names" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) :?>    
                    <strike><?= $task->description ?> </strike>
                <?php else : ?>
                    <?= $task->description ?> 
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>
    <script> 
     document.getElementById('form').addEventListener('submit', function(event) {
        event.preventDefault();
        var symbol = document.getElementById('symbol').value;
        var apiKey = 'JIP1JSFEMELCHQHK';

    // (function(){})
        var url = "http://localhost:8000/";
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var stock = JSON.parse(xhr.responseText);
                console.log(stock)
                // var stockPrice = stock['Global Quote']['05. price'] ?? 'Wrong Symbol';
                // document.getElementById('price').innerHTML = 'Price : ' + stockPrice;
            } else {
                console.log(xhr.statusText);
            }
        }
        xhr.send();
    });
    </script>
<?php require('partials/footer.php') ?>