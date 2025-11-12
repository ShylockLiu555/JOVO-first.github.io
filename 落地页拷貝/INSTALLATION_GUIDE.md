# Ink Context Blog - 完整安装指南

## 📦 快速安装步骤

### 第一步：准备环境

#### 1.1 检查系统要求
```bash
# 检查 PHP 版本
php -v

# 检查 MySQL 版本
mysql --version

# 检查 Node.js 版本（用于前端构建）
node -v
npm -v
```

#### 1.2 安装必要工具
```bash
# macOS
brew install php composer node

# Ubuntu/Debian
sudo apt-get install php php-mysql composer nodejs npm

# CentOS/RHEL
sudo yum install php php-mysql composer nodejs npm
```

---

### 第二步：安装依赖

#### 2.1 安装 PHP 依赖
```bash
cd 落地页/ink-context-blog
composer install
```

#### 2.2 安装前端依赖
```bash
npm install
```

#### 2.3 构建前端资源
```bash
# 开发模式
npm run dev

# 生产模式
npm run build
```

---

### 第三步：配置环境

#### 3.1 创建 .env 文件
```bash
cp .env.example .env
```

#### 3.2 编辑 .env 文件
```bash
# 编辑数据库配置
DB_NAME=your_database_name
DB_USER=your_database_user
DB_PASSWORD=your_database_password
DB_HOST=localhost
```

#### 3.3 生成 WordPress 安全密钥
访问 https://api.wordpress.org/secret-key/1.1/salt/ 获取密钥，复制到 .env 文件

---

### 第四步：激活主题

#### 4.1 通过 WordPress 后台激活
1. 登录 WordPress 管理后台
2. 进入 **Appearance > Themes**
3. 找到 **Ink Context Blog**
4. 点击 **Activate**

#### 4.2 通过命令行激活（使用 WP-CLI）
```bash
wp theme activate ink-context-blog
```

---

### 第五步：配置主题

#### 5.1 基本设置
1. 进入 **Appearance > Customize**
2. 配置以下选项：
   - Site Title（网站标题）
   - Tagline（标语）
   - Logo（logo）
   - Header Image（头部图片）

#### 5.2 菜单设置
1. 进入 **Appearance > Menus**
2. 创建新菜单
3. 添加菜单项
4. 在 **Display location** 中选择 **Primary Menu**

#### 5.3 小工具设置
1. 进入 **Appearance > Widgets**
2. 配置侧边栏小工具
3. 配置页脚小工具

#### 5.4 主题特定选项
1. 进入 **Appearance > Customize**
2. 配置 **Blog post section**
3. 配置 **Related post settings**
4. 配置 **Sidebar settings**

---

## 🔧 文件结构说明

### 已创建的文件

```
ink-context-blog/
├── header.php                          # 页面头部
├── footer.php                          # 页面页脚
├── sidebar.php                         # 侧边栏
├── single.php                          # 单篇文章页面
├── archive.php                         # 存档页面
├── search.php                          # 搜索结果页面
├── 404.php                             # 404 错误页面
├── template-parts/
│   ├── content.php                     # 文章内容模板
│   ├── content-page.php                # 页面内容模板
│   └── content-none.php                # 无内容模板
├── main-body/
│   └── card-slider-section.php         # 卡片滑块区块
├── composer.json                       # PHP 依赖配置
├── package.json                        # 前端依赖配置
└── .env.example                        # 环境变量示例
```

---

## 📋 依赖清单

### PHP 依赖
- composer/installers - Composer 安装程序
- phpunit/phpunit - 单元测试框架
- squizlabs/php_codesniffer - 代码检查工具
- wp-coding-standards/wpcs - WordPress 编码标准

### 前端依赖
- bootstrap@4.5.0 - 响应式框架
- jquery@3.5.0 - JavaScript 库
- slick-carousel@1.8.1 - 轮播库
- aos@2.3.4 - 滚动动画库
- font-awesome@4.7.0 - 图标库
- normalize.css@8.0.1 - CSS 重置

### 开发依赖
- webpack@5.0.0 - 模块打包器
- sass@1.30.0 - CSS 预处理器
- babel@7.12.0 - JavaScript 转译器
- eslint@7.15.0 - 代码检查工具
- jest@26.6.0 - 测试框架

---

## ✅ 验证清单

安装完成后，请检查以下项目：

- [ ] PHP 版本 >= 5.6
- [ ] WordPress 版本 >= 4.5
- [ ] MySQL 版本 >= 5.6
- [ ] composer.json 已安装
- [ ] package.json 已安装
- [ ] .env 文件已配置
- [ ] 主题已激活
- [ ] 菜单已配置
- [ ] 小工具已配置
- [ ] 前端页面正常显示
- [ ] 后台定制器正常工作

---

## 🆘 常见问题

### Q: 主题激活后页面显示空白
**A:** 
1. 检查 PHP 错误日志：`tail -f /var/log/php-errors.log`
2. 启用 WordPress 调试：编辑 wp-config.php，设置 `WP_DEBUG = true`
3. 检查所有必需的模板文件是否存在

### Q: 样式和脚本未加载
**A:**
1. 检查浏览器控制台错误
2. 验证 wp_enqueue_style() 和 wp_enqueue_script() 调用
3. 清除浏览器缓存
4. 运行 `npm run build` 重新构建资源

### Q: 定制器无法打开
**A:**
1. 检查 ink-customizer-hide.js 是否正确加载
2. 检查浏览器控制台 JavaScript 错误
3. 禁用所有插件，测试是否为插件冲突

### Q: 数据库连接错误
**A:**
1. 检查 .env 文件中的数据库配置
2. 验证数据库用户权限
3. 确保 MySQL 服务正在运行

---

## 📞 获取帮助

- 官方文档：https://www.postmagthemes.com/docs/
- 演示站点：https://contextblog.postmagthemes.com/inkcontextblog
- 支持论坛：https://www.postmagthemes.com/support/


