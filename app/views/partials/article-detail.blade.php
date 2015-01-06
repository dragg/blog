<div>
    <h1>{{vm.article.title}}</h1>
    <p>{{vm.article.body}}</p>

    <h4>Комментарии:</h4>

    <form>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Имя" name="Author" data-ng-model="vm.comment.author">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="body" placeholder="Комментарий" data-ng-model="vm.comment.body"></textarea>
        </div>

        <button class="btn btn-success" type="submit" data-ng-click="vm.sendComment(vm.article.id, vm.comment.author, vm.comment.body)">Отправить</button>
    </form>

    <ul data-ng-repeat="comment in vm.article.comments">
        <li>
            <h6>{{comment.author}}</h6>
            <p>{{comment.body}}</p>
        </li>
    </ul>


</div>