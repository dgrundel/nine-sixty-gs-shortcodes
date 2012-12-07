nine-sixty-gs-shortcodes
========================

Adds [grid] and [clear] shortcodes for content editing convenience when using the 960.gs CSS framework.

**[grid]**

[grid] supports five attributes: "width", "alpha", "omega", "class", and "style".
[grid] is best used with a closing [/grid] shortcode.

You can use [grid] like this:

```
[grid width="4"] This is column one. [/grid]
[grid width="4"] This is column two. [/grid]
[grid width="4"] This is column three. [/grid]
```

You can nest [grid], also. Be sure to use "alpha" and "omega", as you usually would:

```
[grid width="4"]
    This is column one. It has a couple nested columns.
    [grid width="3" alpha] Nested column one. [/grid]
    [grid width="1" omega] Nested column two. [/grid]
[/grid]
[grid width="4"] This is column two. [/grid]
[grid width="4"] This is column three. [/grid]
```

If you need to add your own CSS classes to the div that [grid] generates, use the "class" attribute. Separate multiple classes with a space, just like you would if you were handwriting the HTML yourself.

```
[grid width="12" class="my-awesome-css-class another-sweet-class"]
```

[grid]'s "style" attribute can be used to add inline styles to the div it generates, like this:

```
[grid width="12" style="background-color: #8EBC45"]
```

**[clear]**

[clear] behaves as you'd probably expect. You use it to start a new row:

```
[grid width="6"] This is row one, column one.[/grid]
[grid width="6"] This is row one, column two. [/grid]

[clear]

[grid width="4"] This is row two, column one. [/grid]
[grid width="8"] This is row two, column two. [/grid]
```