# Automation Deployment using Ansible

Rules </br>
• Your site can restart automatically if the server is rebooted. </br>
• In case of reboot all the data of the site are persisted (images, user accounts, articles,
...). </br>
• It is possible to deploy your site on several servers in parallel. </br>
• The script must be able to function in an automated way with for only assumption
an ubuntu 20.04 LTS like OS of the target instance running an SSH daemon and
with Python installed. </br>
• Your applications will run in separate containers that can communicate with each
other (1 process = 1 container) </br>
• Public access to your server must be limited and secure (for example, it is not
possible to connect directly to your database from the internet). </br>
• The services will be the different components of a WordPress to install by yourself.
For example Phpmyadmin, MySQL, ... </br>
• You must have a docker-compose.yml. </br>
• You will need to ensure that your SQL database works with WordPress and PHPMyAdmin. </br>
• Your server should be able, when possible, to use TLS. </br>
• You will need to make sure that, depending on the URL requested, your server
redirects to the correct site. </br> </br>

Some useful command lines...
  1. Vagrant cli
    - vagrant init
    - vagrant up
    - vagrant ssh
    - vagrant halt
    - vagrant destroy

  2. Ansible cli
    - ansible-galaxy init 'project_name'
    - ansible-playbook -i 'inventory_name' 'playbook.yml'

  3. Docker cli
    - docker logs 'container_name'
    - docker exec -it 'container_name' 'command'
    - docker restart 'container_name'

Tips for the project :)
  1. Create ansible rollback playbook
  2. Find Vagrant ssh key
  3. Understand web server, proxy server
  4. Watch out for Docker volumes and understand how they're used
  5. Try out different ways of writing dockerfile commands
  6. Install dependencies for services (Check their official websites)
  7. Know that php works as a server
  8. Before dockerfile, try commands(to install, setup etc) on terminal to verify if it works
  9. Configuring is a key
  10. Test and Debug!


