<div>
    <h1>{{vm.article.title}}</h1>
    <p>{{vm.article.body}}</p>
    <p>{{vm.article.created_at}}</p>

    <div data-ng-if="vm.article.prev">
        <p>Предыдущая статья:</p>
        <a href="#/articles/{{vm.article.prev.id}}">{{vm.article.prev.title}}</a>
    </div>

    <div data-ng-if="vm.article.next">
        <p>Следующая статья:</p>
        <a href="#/articles/{{vm.article.next.id}}">{{vm.article.next.title}}</a>
    </div>

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
            <p>{{comment.created_at}}</p>
        </li>
    </ul>
</div>