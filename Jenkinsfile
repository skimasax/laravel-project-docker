pipeline{

agent any

    stages{
        stage('Fetch Code'){
            steps{
                git branch: 'main', 
                url:'https://github.com/skimasax/laravelproject.git'
            }
        }

        stage('download dependencies'){
            steps{
                sh 'composer install'
            }
        }

        stage('run test'){
            steps{
                sh 'php artisan test'
            }
        }
        
    }

}