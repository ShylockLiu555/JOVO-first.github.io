module.exports = {
  testEnvironment: 'jsdom',
  roots: ['<rootDir>/assets/js', '<rootDir>/tests'],
  testMatch: ['**/__tests__/**/*.js', '**/?(*.)+(spec|test).js'],
  moduleFileExtensions: ['js', 'json'],
  collectCoverageFrom: [
    'assets/js/**/*.js',
    '!assets/js/**/*.min.js',
    '!assets/js/dist/**',
    '!assets/js/vendor/**',
  ],
  coverageThreshold: {
    global: {
      branches: 50,
      functions: 50,
      lines: 50,
      statements: 50,
    },
  },
  setupFilesAfterEnv: ['<rootDir>/tests/setup.js'],
  moduleNameMapper: {
    '^@/(.*)$': '<rootDir>/assets/js/$1',
  },
  transform: {
    '^.+\\.js$': 'babel-jest',
  },
  testPathIgnorePatterns: ['/node_modules/', '/vendor/'],
  coveragePathIgnorePatterns: ['/node_modules/', '/vendor/'],
  verbose: true,
};

