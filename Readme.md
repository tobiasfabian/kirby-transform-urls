# Kirby Plugin: Transform URLs

Transforms uuid links in writer fields to links with readable path.

Before:
```
Lorem <a href="/@/page/vnEifKM2ECWtLyyq">Ispum</a>
Dolor <a href="/@/file/AADooEhhPozGHzfl">sit</a>
```

After:
```
Lorem <a href="https://example.com/lorem/ipsum>Ispum</a>
Dolor <a href="https://example.com/media/pages/dolor-sit/d948bff236-1694729834/example.jpg">sit</a>
```


## Installation

### Download

Download and copy this repository to `/site/plugins/transform-urls`.

### Git submodule

```
git submodule add https://github.com/tobiasfabian/kirby-transform-urls.git site/plugins/transform-urls
```

### Composer

```
composer require tobiaswolf/transform-urls
```

## Usage

This plugin provides a Field method called `transformUrls()`. You can use it on any field – most likely you want to use it for writer fields. The method searches for uuid links (e.g. `/@/page/vnEifKM2ECWtLyyq`) and transforms them to an URL with the full path (e.g. `https://example.com/lorem/ipsum`).

```php
<?= $block->text()->transformUrls() ?>
```

If the page/file is not found by the UUID, the link will not be changed. If the debug mode is activated it will throw an error.

## License

MIT

## Credits

- [Tobias Wolf](https://github.com/tobiasfabian)
