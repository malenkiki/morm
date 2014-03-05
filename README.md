# Morm

## Features

**Morm** is an attempt to create a nice and as powerfull as possible PHP [ORM](http://en.wikipedia.org/wiki/Object-relational_mapping).

For now, Morm can handle:

 * Simple Object -> Table mapping
 * one to one relations
 * one to many relations
 * many to many relations (still in early alpha stage though)
 * polymorphism
 * Single Table Inheritance also know as STI
 * FullText search with [Sphinx](http://www.sphinxsearch.com/)

Thanks to the new **Mormulous file**, you can now use Morm in a very simple manner.

All you have to do is edit `Mormulous.php`.

The minimal config you can do is set the `DB_NAME` and `DB_USER` constants.
You can also set the other Constants to match your requirements.

Morm is now Usable.

Let's suppose you have a table named `post` in your database with a field called
`name`.

You can walk through its content by simply doing

```php
require_once('Mormulous.php');

$posts = new Mormons('post');

foreach($posts as $post)
{
    echo $post->name . PHP_EOL;
}
```

You'll see that Morm will **automagically generate a Model file** called `post.php` in the `MODELS_PATH` and use it.

As soon as this model has been generated once, you can edit it at your
conveniance.


Be careful if you have a field called `type` in your table.
Morm will try to use the STI and load a class named after the content of this
field. Eventhough Morm tries to guess things and be nice with you as much as
possible, in this case, if the model Morm is looking for does not exist, it will
fail.
If you want to avoid this behavior, just add

```php        
protected $sti_field = NULL;
```

in the corresponding model


## License and questions
Copyright (c) 2009-2014, AF83, All rights reserved
BSD License

You can ask for help and/or improvements or just say hi on the **irc.freenode.org#morm** channel


**Feel free to ask for improvements!**
