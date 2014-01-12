## Forms

Forms are typically tied to a router item. Form definitions are classes (usually under lib/Drupal/modulename/Form/) that extend \Drupal\Core\Form\ConfigFormBase. To define your form you implement \Drupal\Core\Form\FormInterface. If your form depends on services, you fetch them in the `create` method, and use them in the constructor.

### Configuration Management

Configuration values can be managed by CM – all that is required is that you define the config schema. I think.
