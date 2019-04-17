#IUPITER by Yocabè

##Tecnologie usate
- Symfony4
- Mysql
- Docker
- Api-platform
- DtcQueue
- RabbitMQ

##Init progetto
Essendo un progetto symfonyl'init è standard (dalla console nella dir del progetto):

- per caricare i vendor: `composer install`
- per creare il db: `bin/console doctrine:database:create`
- per inizializzare il db: `bin/console doctrine:migrations:migrate`
- per caricare i dati base: `bin/console doctrine:fixtures:load`

##Creare un admin base
Per creare un admin base gestito da sonata digitare questo comando dalla console:
`make:sonata:admin`

#Link utili
* [DtcQueue](https://github.com/mmucklo/DtcQueueBundle)
* [Api-Platform](https://api-platform.com/)