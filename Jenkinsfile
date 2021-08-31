pipeline {
    agent {
        label 'test_joku'
    }
    stages {
        stage('build') {
            steps {
                sh 'echo "Hello World"'
            }
        }
        stage('Trying npm install ') {
            steps {
                sh 'npm install'
            }
        }
    }
}
