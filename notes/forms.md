## Forms

Forms are typically tied to a router item. Form definitions are classes (usually under lib/Drupal/modulename/Form/) that extend \Drupal\Core\Form\FormBase. To define your form you implement \Drupal\Core\Form\FormInterface. If your form depends on services, you fetch them in the `create` method, and use them in the constructor.

### Configuration Forms

These are forms that extend \Drupal\Core\Form\ConfigFormBase. Configuration values can be managed by CM – Provided that you provide a configuration schema, and default sane values that the site can copy over to it's configuration directory, you /should/ always have a value (default or otherwise) to retrieve.
