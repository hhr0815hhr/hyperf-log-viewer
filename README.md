
### 本包来源于 https://github.com/kxg3030/hyperf-log-viewer  2.0可使用
### 本包来源于 https://github.com/sinceyy/hyperf-log-viewer  2.2版本可使用

### 此版本添加了一些功能：年月目录、文件名筛选，可方便查询搜索各目录下日志

![image](https://user-images.githubusercontent.com/19525372/168023711-0bcf86ce-d7a0-432a-9dd8-e8c841eb7697.png)


#### 二、使用

- 1.安装组件

`composer require hhr0815hhr/hyperf-log-viewer`
- 2.发布配置文件

`php bin/hyperf.php vendor:publish hhr0815hhr/hyperf-log-viewer`

- 3.注册路由

```
Router::get('/logs/list', [LogViewController::class, "index"]);
Router::post('/logs/delete', [LogViewController::class, "delete"]);
Router::get('/logs/download', [LogViewController::class, "download"]);
```

- 4.安装view组件

`composer require hyperf/view`

`php bin/hyperf.php vendor:publish hyperf/view`

- 5.安装模板引擎

`composer require sy-records/think-template`

- 6.安装任务task

`composer require hyperf/task`

- 6.配置视图

> 在config\autoload\viewe.php文件中(如果不存在,自行创建),添加如下视图配置

```
return [
        'engine' => ThinkEngine::class,
        'mode'   => Mode::TASK,
        'config' => [
            // 若下列文件夹不存在请自行创建
            'view_path'  => BASE_PATH . '/storage/view/',
            'cache_path' => BASE_PATH . '/runtime/view/',
        ],
];
```
- 7.配置组件参数

> 在config\autoload\logViewer.php文件中,添加自己的日志文件目录

```
return [ 
   // 日志文件目录
   "path" => BASE_PATH . "/runtime/logs/", 
   // 日志文件匹配规则
   "pattern" => "*.log", 
   // 每页展示的条数
   "size" => 10 
   ]; 
```
` 对于/runtime/logs/Ym/下的日志文件，添加了Ym搜索、文件名筛选功能 `

#### 三、访问
打开自己的访问地址`ip:port/logs/list`就能看到日志界面了

#### 四、说明
- 日志时间格式只支持年月日时分秒格式,否则可能看不到记录,日志格式大概是这样

    `[2020-11-02 10:12:48] system.INFO: HTTP Server listening at 0.0.0.0:18310`

    `[2020-11-02 14:52:50] system.ERROR: must implement interface`
- 如果大家有什么意见或者建议，欢迎留言。
