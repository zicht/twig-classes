# twig-classes

Twig extension for [zicht/classes](https://github.com/zicht/classes).

## Installing

```
composer require zicht/twig-classes
```

## Purpose

Provide easy conditionally joining of CSS classes in Twig templates.
## Usage

```
{{ classes('art-vandelay') }} ⇒ 'art-vandelay'
{{ classes(['art-vandelay', 'kramerica']) }} ⇒ 'art-vandelay  kramerica'
{{ classes(['art-vandelay' => true, 'kramerica' => false]) }} ⇒ 'art-vandelay'
{{ classes('art-vandelay', ['kramerica' => false, 'kel-varnsen' => true]) }} ⇒ 'art-vandelay  kel-varnsen'
```

## Example

When classes are manually added by checking one ore more properties, code can be quite hard to read:

```
{% set cx = [
    image.url ? 'u-margin--b2' : 'u-margin--b0  u-text--center',
    equal_height  ? 'u-flex'
] %}
   
<article class="{{ cx|join('  ') }}">
    ...
</article>
```

With the `classes` function, it becomes much more apparent which class is toggled by what property:

```
{% set cx = classes({
    'u-margin--b2': image.url,
    'u-margin--b0  u-text--center': not image.url,
    'u-flex': equal_height
}) %} 
   
<article class="{{ cx }}">
    ...
</article>
```

You can even created a nested object if you need to conditionally apply classes to multiple elements.

```
{% set cx = {
    card: classes({
        'u-margin--b2': image.url,
        'u-margin--b0  u-text--center': not image.url,
        'u-flex': equal_height
    }),
    img: classes({
        'u-black  u-bg--red': color == 'black'
    })
} %} 
   
<article class="{{ cx.card }}">
    <img class="{{ cx.img }}">
    ...
</article>
```

