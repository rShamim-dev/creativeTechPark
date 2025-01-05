## Install process

1. Clone Repository

```bash
    git clone git remote add origin https://github.com/rShamim-dev/creativeTechPark.git && cd creativeTechPark
```

2. Composer Update

```bash
    composer update
```

3. Npm Install and Run npm

```bash
    npm install
    npm run dev
```

4. Copy Env file

```bash
    cp .env.example .env
```

5. Key Generate

```bash
    php artisan key:generate
```

6. Database create and update .env file then run command

```bash
    php artisan migrate:fresh --seed
```

7. Dashboard access creadentials

```bash
    email: admin@gmail.com
    pass: 123456
```
