## Laag - Laravel Api Auto generator
version:  0.0.1
> 本套件仍在開發中，請勿使用 this packag is still in devloping, please do not use this package

寫好文件就可以產生api的套件 包括測試、open api 文件等
程式碼將會有四層：Controller Service Repository  
以依賴注入方式加入下層程式碼 
並且在route文件加入url路徑

並且提供rollback 功能
requirement
# installation
1. 使用 composer 安裝

    composer require kyjita/laag

2. 在app.php中 aliases 加入
```
    'aliases' => [
        ...
        'Laag' => Kyjita\Laag\Laag::class,
        ...
```
3. publish
```
    php artisan vendor:publish --provider="Kyjita\Laag\LaagServiceProvider" 
```
# 使用
寫好yaml檔之後 打指令 
```
    php artisan laag:publish
```
就可以發布 api

指定檔案: (假設為example.yaml)
```
    php artisan laag:publish --file="example"
```
指定Model
```
    php artisan laag:publish --model="testModelName"
```
rollback
```
    php artisan laag:rollback --model="testModelName"
```
rollback 指定檔案 (假設為example.yaml)
```
    php artisan laag:rollback --file="example"
```
rollback 全部
```
    php artisan laag:rollback --all
```


# Todo
[ ] command執行指令讀取所有yaml檔
[ ] 自動產生migration檔案
[ ] 自動產生Controller 到 Model的檔案 含 Service、Repository 、interface
[ ] 自動產生測試
[ ] 自動產生文件
[ ] 增加route 到api.php
[ ] 產生 exception處理 
[ ] 使用json回應
[ ] rollback 功能

# requirements:

- PECL yaml >= 0.4.0
- responder
