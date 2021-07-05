<?php
ini_set('display_errors','on');

/*
依赖具体实现模式
Storage依赖了Flopply的具体的实现
当要改为Usb的时候就要修改Storage类将Flopply实例化改为Usb实例化
*/
// include 'a1/Storage.php';
// $storage = new Storage();
// $storage->save();


/*
IoC模式 依赖抽象接口 依赖注入(DI)具体实现
Storage不依赖Flopply或Usb的具体实现
而是要依赖Flopply和Usb的依赖抽象接口IDevice
这样后面新增存储设备后就不用修改Storage类
只需要将具体的存储设备类通过依赖注入的方式传入
 */
// include 'a2/Storage.php';
// include 'a2/Usb.php';
// include 'a2/Floppy.php';
// $usb = new Usb();
// $floppy = new Floppy();
// //依赖注入Usb
// $storage = new Storage($usb);
// $storage->save();
// //依赖注入Floppy
// $storage = new Storage($floppy);
// $storage->save();

/*
容器
当依赖注入(DI)很多的时候，就要用全局容器的工厂方法来管理依赖
 */

