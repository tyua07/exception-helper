### 异常帮助类
    

#### 安装

    composer require yangyifan/exception-helper:v0.1
    
#### 注意

    自定义的异常请写入到 ```App\Exceptions\Handler``` 类的 ```$dontReport``` 属性里面。
    
    use Yangyifan\Exception\InvalidArgumentException;
    use Yangyifan\Exception\AppIsTooOldException;
    use Yangyifan\Exception\AppNeedToUpdateException;
    use Yangyifan\Exception\ForbiddenException;
    use Yangyifan\Exception\PayErrorException;
    use Yangyifan\Exception\RequestMethodErrorException;
    use Yangyifan\Exception\RequestParamErrorException;
    use Yangyifan\Exception\ServerErrorException;
    use Yangyifan\Exception\TimeOutException;
    use Yangyifan\Exception\ToManyRequestsException;
    use Yangyifan\Exception\UnauthorizedException;
    use Yangyifan\Exception\UserNotExistsException;
    
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
        AppIsTooOldException::class,
        AppNeedToUpdateException::class,
        ForbiddenException::class,
        InvalidArgumentException::class,
        PayErrorException::class,
        RequestMethodErrorException::class,
        RequestParamErrorException::class,
        ServerErrorException::class,
        TimeOutException::class,
        ToManyRequestsException::class,
        UnauthorizedException::class,
        UserNotExistsException::class,
    ];
        
#### 协议

MIT
        
    
    
    
    
    