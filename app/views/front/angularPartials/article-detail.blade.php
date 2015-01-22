<div>
    <h1>{{vm.article.title}}</h1>
    <p>{{vm.article.body}}</p>
    <p>{{vm.article.created_at}}</p>

    <div data-ng-if="vm.article.prev">
        <p><% trans('front/article.button_next_article') %>:</p>
        <a href="#/articles/{{vm.article.prev.id}}">{{vm.article.prev.title}}</a>
    </div>

    <div data-ng-if="vm.article.next">
        <p><% trans('front/article.button_next_article') %>:</p>
        <a href="#/articles/{{vm.article.next.id}}">{{vm.article.next.title}}</a>
    </div>

    <h4><% trans('front/article.comments') %>:</h4>

    <form>
        <div class="form-group">
            <input class="form-control" type="text"
            placeholder="<% trans('front/article.placeholder_name') %>" name="Author" data-ng-model="vm.comment.author">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="body"
            placeholder="<% trans('front/article.placeholder_comment') %>" data-ng-model="vm.comment.body"></textarea>
        </div>
        <button class="btn btn-success" type="submit"
         data-ng-click="vm.sendComment(vm.article.id, vm.comment.author, vm.comment.body)">
         <% trans('front/article.button_comment_send') %>
        </button>
    </form>

    <ul data-ng-repeat="comment in vm.article.comments">
        <li>
            <h6>{{comment.author}}</h6>
            <p>{{comment.body}}</p>
            <p>{{comment.created_at}}</p>
        </li>
    </ul>
</div>