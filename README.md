## Laravel Api Auto generator
寫好文件就可以產生api的套件 包括測試、open api 文件等
程式碼將會有四層：Controller Service Repository  
以依賴注入方式加入下層程式碼 
並且在route文件加入url路徑

並且提供rollback 功能
requirement


# Todo
[ ] command執行指令讀取所有yaml檔
[ ] 自動產生migration檔案
[ ] 自動產生Controller 到 Model的檔案 含 Service、Repository 、interface
[ ] 自動產生測試
[ ] 自動產生文件
[ ] 增加route 到api.php
[ ] 產生 exception處理 
[ ] 使用json回應

# requirements:

PECL yaml >= 0.4.0