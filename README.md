1. Download and install VirtualBox. Download and install Vagrant.
 - https://www.virtualbox.org/wiki/Linux_Downloads
 - https://www.vagrantup.com/intro/getting-started

2. Clone the repository "git@github.com:sergpsw/docker-LEMP.git" to your machine in any folder. Copy YOUR dump.sql file in this folder. Open a terminal in this folder.

3. Copy '.env_examle' in '.env' and change variables.

4. Run the command 'vagrant up'. 

5. Wait the virtual machine starts up, open in the browser. http://192.168.88.83:80

NOTE! 80 is the default port, you specify the port that is registered in .env.
