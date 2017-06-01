# [LVOS]Stock-Exchange

Resources for FiveM - Dynamic stock exchange system, sales price changes according to sales

![Stock Exchange System](https://img4.hostingpics.net/pics/415502selvos.jpg)

## Warning

For this resource, it is necessary to have a minimum knowledge of the scripts that are installed on its server, it will be necessary to adapt this system to your system of inventory. I would not adapt to any inventory system, it's you to do it because every project and different.

## Required

- Optionnal but recommended for requests : [MYSQL Async](https://github.com/brouznouf/fivem-mysql-async)
- An inventory system, especially for resource sales

## Features

- Change prices automatically based on sales of the resource.
- Configurable volatility, you can make a resource more volatile or less depending on your desires.
- The Stock Exchange System is similar to that of Arma 3 in mode "Altis Life" it walks between two resources if one goes up the other goes down. I like this system that's why I tried to reproduce it more or less.
- Configurable coefficient, you can set the maximum and minimum percentage for a resource. (See below for an example, and explanation in more detail)
- A website to consult the Stock Exchange

**Website**

The current resource includes a web site to view the day live, the site indicates whether the resource is declining, rising or stable. Also indicates the price. This is automatically generate once the files are configured you no longer need to modify the site, prices will update on their own, the resources automatically add to the site. It will be necessary to adapt the site if necessary. Go to the Adapted section on the project wiki. It is even possible to have different scholarships if you have more than one server.

The site uses Bootstrap to accompany the AdminLTE graphic style. The site is therefore responsive. It can even be improved to create an RP panel as does Los Vanilla.

![Website](https://i.imgur.com/zOqMed6.png)

**Simple configuration**

Each file has been designed to simplify the configuration of the stock exchange, it will only take a few minutes to modify values or add an exchange resource.

Volatility = Larger (or bigger idk) the number the less volatile the resource is, depending on the number of players on your server and the average number of sales in 24 hours, it will take some test in my case it goes from 100 to 300 for the most volatile.

![Simple configuration](https://i.imgur.com/LQKlK7E.png)

Cofficient = The coefficient allows to limit a resource to avoid what is either too high or too low. This parameter is in the database in the "resource" table in the "coef" field, it must be configured when you add the resource to the stock exchange. For example, if the coefficient is 50, the base price of my resource is $ 100. Whatever happens to me resource will not go below $ 50 and will not rise above $ 150. It can be adjustable according to your wishes AGAAIIN.

![Simple configuration](https://i.imgur.com/3tNBSYh.png)

## Installation

[Click Here for Wiki](https://github.com/PandaBasketteur/-LVOS-Stock-Exchange/wiki/Install-%5BLVOS%5D-Stock-Exchange)

## Adapted

[Click Here for Wiki](https://github.com/PandaBasketteur/-LVOS-Stock-Exchange/wiki/Adapted-%5BLVOS%5D-Stock-Exchange)

## Database SQL Informations

[Click Here for Wiki](https://github.com/PandaBasketteur/-LVOS-Stock-Exchange/wiki/Database-SQL)

## Configuration

[Click Here for Wiki](https://github.com/PandaBasketteur/-LVOS-Stock-Exchange/wiki/Configuration)
