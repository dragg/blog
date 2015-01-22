<div data-ng-repeat="article in vm.articles" class="top">
    <h2>{{article.title}}</h2>
    <p class="text-justify">{{article.body}}</p>
    <a href="#/articles/{{article.id}}" class="btn btn-default"><% trans('front/article.button_read_more') %></a>
    {{article.created_at}}
</div>