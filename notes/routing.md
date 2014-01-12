## Routing

Hook Menu used to be the only sort of routing declaration required, but now there is a conjunction of a *.routing.yml and hook_menu(). Entries in hook_menu() reference a `rout_name`, which is defined in the `modulename.routing.yml` file.

Here's an example
```yml
aggregator.admin_overview:
  path: '/admin/config/services/aggregator'
  defaults:
    _content: '\Drupal\aggregator\Controller\AggregatorController::adminOverview'
    _title: 'Feed aggregator'
  requirements:
    _permission: 'administer news feeds'
```

As you can see, this yml entry describes permissions, title, and a content callback. (Content callback can come from a service, or can be derived from other keys, such as _entity_form, _form, _controller, _entity_list, etc.). Ultimately, `_content` will return a renderable array.

